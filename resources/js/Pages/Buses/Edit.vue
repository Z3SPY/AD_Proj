<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, router } from "@inertiajs/vue3";
import { defineProps, computed } from "vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
import { reactive } from "vue";

const props = defineProps({
    bus: Object,
});

const form = reactive({
    _method: "put",
    capacity: props.bus.capacity,
    code: props.bus.code,
    type: props.bus.type,
});

const generatedCode = computed(() => {
    if (form.type && form.capacity) {
        const randomNumbers = Math.floor(Math.random() * 10000)
            .toString()
            .padStart(4, "0");
        return `${form.type.substring(0, 1).toUpperCase()}${form.capacity} - ${randomNumbers}`;
    }
    return "";
});

function update() {
    router.post(`/bus/${props.bus.id}`, {
        _method: "put",
        capacity: form.capacity,
        code: generatedCode.value, // Use the computed generatedCode here
        type: form.type,
    });
}
</script>

<template>
    <Head title="Update Bus Route" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden ma-8 w-100 bg-red-200 rounded-lg border shadow-xs"
                >
                    <div class="overflow-x-auto mx-8">
                        <form @submit.prevent="update">
                            <InputLabel for="code" value="Code" />
                            <TextInput id="origin" type="text" v-model="generatedCode" readonly />

                            <InputLabel
                                for="type"
                                class="block font-medium text-gray-700"
                                >Select Bus Type:</InputLabel
                            >
                            <select
                                id="type"
                                v-model="form.type"
                                class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none focus:border-indigo-500"
                            >
                                <option value="deluxe">De Luxe</option>
                                <option value="firstclass">First Class</option>
                                <option value="luxury">Luxury</option>
                                <option value="superdeluxe">
                                    Super De Luxe
                                </option>
                            </select>
                            <InputLabel for="capacity" value="Capacity" />
                            <select
                                id="capacity"
                                v-model="form.capacity"
                                class="mt-1 block w-full px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:outline-none focus:border-indigo-500"
                            >
                                <option value="30">30</option>
                                <option value="45">45</option>
                            </select>
                            <div class="py-3 md:w-1/3">
                                <PrimaryButton>Submit</PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
