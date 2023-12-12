<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";
import Sidebar from "@/Components/Sidebar.vue";
import Navbar from "@/Components/Navbar.vue";
defineProps({
    count_reservation: Number,
});
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <Sidebar @childDataEvent="handleChildData" />

            <main class="bg-gradient-to-b from-purple-400 to-blue-400">
                <div
                    :class="{ pog: !receivedData }"
                    class="p-4 h-auto min-h-[100vh] sm:ml-64"
                    id="main"
                >
                    <div class="p-4 mt-14">
                        <slot />
                    </div>
                </div>
            </main>
        </div>
    </div>
</template>

<style scoped>
#main.pog {
    margin: 0;
    transition: margin 0.5s ease-in-out;
}

#main {
    transition: margin 0.5s ease-in-out;
}
</style>
<script>
export default {
    components: {
        Sidebar,
    },
    data() {
        return {
            receivedData: true,
        };
    },
    methods: {
        handleChildData(data) {
            // Handle the data received from the child component
            console.log(this.receivedData);
            this.receivedData = data;
        },
    },
};
</script>
