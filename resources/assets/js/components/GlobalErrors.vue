<template>
    <v-snackbar
            v-model="show"
            :right="true"
            :timeout="100000"
            :top="true"
            :vertical="true"
            color="deep-purple lighten-2"
    >
        {{ text }}
        {{ hasResponse }}
        <v-btn
                flat
                @click="show = false"
        >
            Close
        </v-btn>
    </v-snackbar>
</template>

<script>
    import {mapGetters, mapState} from 'vuex'

    export default {
        name: "GlobalErrors",
        data() {
            return {
                text: 'test',
                show: true
            }
        },
        computed: {
            ...mapState({
                response: state => state.http_errors.response,
            }),
            ...mapGetters('http_errors', [
                'hasResponse',
            ])
        }
    }
</script>

<style scoped>

</style>