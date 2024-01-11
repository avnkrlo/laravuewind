<script>
    import Navlink from "./Navlink.vue";

    export default {
        components: { Navlink },
    };
</script>

<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <Navlink href="/" :active="$page.component == 'Login'">
                    Login
                </Navlink>
            </li>

            <li>
                <Navlink href="/Register" :active="$page.component == 'Register'">
                    Register
                </Navlink>
            </li>

            <li>
                <Navlink href="/Dashboard" :active="$page.component == 'Dashboard'">
                    Dashboard
                </Navlink>
            </li>
        </ul>
    </nav>
</template>
