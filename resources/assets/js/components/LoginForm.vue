<template>
    <div class="text-xs-center">
        <v-dialog
                v-model="dialog"
                width="600"
                class="pa-2"
        >
            <v-btn
                    slot="activator"
                    color="red lighten-2"
                    dark
            >
                Login
            </v-btn>
            <v-card>
                <v-card-title
                        class="headline grey lighten-2"
                        primary-title
                >
                    Authentication
                </v-card-title>
                <v-card-text>
                    Fill your email and password to authenticate.
                </v-card-text>
                <v-form class="ma-3">
                    -{{ loginErrors }}-
                    <v-alert
                            :value="loginErrors.length > 0"
                            type="success"
                            transition="scale-transition"
                    >
                        This is a success alert.
                    </v-alert>
                    <v-text-field prepend-icon="person" name="email" label="email" type="text"
                                  v-model="email"></v-text-field>
                    <v-text-field id="password" prepend-icon="lock" name="password" label="Password" v-model="password"
                                  type="password"></v-text-field>
                    <v-spacer></v-spacer>
                    <v-btn color="info" @click="handleLogin">
                        Login
                    </v-btn>
                </v-form>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn
                            color="danger"
                            flat
                            @click="dialog = false"
                    >
                        Close
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
    import {mapGetters, mapState} from 'vuex'

    export default {
        name: "LoginForm",
        data() {
            return {
                dialog: false,
                email: '',
                password: '',
            }
        },
        computed: {
            ...mapState({
                user: state => state.auth.user,
                loginErrors: state => state.auth.loginErrors,
                loginErrorMessage: state => state.auth.loginErrorMessage
            }),
            ...mapGetters([
                'auth/isUserSet',
                'auth/hasLoginErrors',
            ])
        },
        methods: {
            handleLogin() {
                this.$store.dispatch('auth/login', {
                    email: this.email,
                    password: this.password
                })
            }
        }
    }
</script>

<style scoped>

</style>