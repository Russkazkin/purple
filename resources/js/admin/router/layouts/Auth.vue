<template>
    <div>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <slot />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Auth",
    components: {},
    created: () => {
        document.body.classList.add('authentication-bg')
    },
}
</script>

<style scoped>

</style>
