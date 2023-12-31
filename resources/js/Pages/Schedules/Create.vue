<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, router } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { reactive, ref, watch } from "vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

defineProps({
    routes: Object,
    buses: Object,
});

const form = reactive({
    departure_time: "",
    arrival_time: "",
    price: 0,
    bus_id: "",
    route_id: "",
});

// Watch for changes in the price property and ensure it's never below zero
watch(
    () => form.price,
    (newPrice, oldPrice) => {
        if (newPrice < 0) {
            form.price = 1;
        }
    }
);

function submit() {
    if (!validateArrivalTime()) {
        // Return to prevent the form from being submitted
        return;
    }

    router.post(route("schedule.store"), form);
}

function validateArrivalTime() {
    const departureTime = form.departure_time;
    const arrivalTime = form.arrival_time;

    if (arrivalTime < departureTime) {
        // Display an error message to the user
        alert("Arrival time must be after departure time");
        return false;
    }

    return true;
}
</script>

<template>
    <Head title="Create Bus " />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden ma-8 w-100 bg-red-200 rounded-lg border shadow-xs"
                >
                    <div class="flex md:items-center m-6">
                        <form class="w-full max-w-sm" @submit.prevent="submit">
                            <div class="md:w-1/3">
                                <InputLabel
                                    for="departure_time"
                                    class=""
                                    value="Departure Time"
                                />
                            </div>
                            <div class="block w-full">
                                <TextInput
                                    id="departure_time"
                                    type="datetime-local"
                                    v-model="form.departure_time"
                                    required
                                />
                            </div>
                            <div>
                                <InputLabel
                                    for="arrival_time"
                                    value="Arrival Time"
                                />
                            </div>
                            <div class="block w-full">
                                <TextInput
                                    id="arrival_time"
                                    type="datetime-local"
                                    v-model="form.arrival_time"
                                    required
                                />
                            </div>
                            <div>
                                <InputLabel for="price" value="Price" />
                            </div>
                            <div class="block w-full">
                                <TextInput
                                    id="price"
                                    type="number"
                                    v-model="form.price"
                                    required
                                />
                            </div>

                            <InputLabel
                                for="route"
                                class="block font-medium text-gray-700"
                                >Select Bus Route:</InputLabel
                            >
                            <select
                                id="route"
                                v-model="form.route_id"
                                class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none focus:border-indigo-500"
                            >
                                <option
                                    v-for="route in routes"
                                    :value="route.id"
                                >
                                    {{ route.origin }} - {{ route.destination }}
                                </option>
                            </select>

                            <InputLabel
                                for="bus"
                                class="block font-medium text-gray-700"
                                >Select Bus
                            </InputLabel>
                            <select
                                id="route"
                                v-model="form.bus_id"
                                class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none focus:border-indigo-500"
                            >
                                <option v-for="bus in buses" :value="bus.id">
                                    {{ bus.code }} - {{ bus.type }}
                                </option>
                            </select>

                            <div class="py-3 md:w-1/3">
                                <PrimaryButton type="submit">
                                    Submit
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
