<template>
    <v-snackbar
            :value="hasResponse"
            :timeout="0"
            :right="true"
            :top="true"
            :vertical="true"
            color="error"
    >
        {{ message }}
        <v-btn
                flat
                @click="handleClose"
        >
            Close
        </v-btn>
    </v-snackbar>
</template>

<script>
    import {mapGetters, mapState} from 'vuex'
    import * as mutationTypes from '../store/modules/mutation_types'

    export default {
        name: "GlobalErrors",
        computed: {
            ...mapState({
                response: state => state.http_errors.response,
            }),
            ...mapGetters('http_errors', [
                'hasResponse',
                'message'
            ])
        },
        methods: {
            handleClose() {
                this.$store.commit('http_errors/' + mutationTypes.UN_SET_RESPONSE)
            }
        }
    }
</script>

<style scoped>

</style>