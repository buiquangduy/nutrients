<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 form-confirm-email">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    <form class="form-horizontal">
                        <div :class="`form-group ${errors.email ? 'has-error' : ''}`">
                            <div class="row">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email" v-model="email">

                                    <span class="help-block" v-if="errors.email">
                                    <strong>{{ errors.email[0] }}</strong>
                                </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <button type="submit" class="btn btn-default col-md-6" @click.prevent="back">
                                    back
                                </button>
                                <button type="submit" class="btn btn-success col-md-6" @click.prevent="submit">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import http from 'infrastructures/http'
    import router from '@/router'

    export default {
        data() {
            return {
                email: this.email,
                errors: {},
            }
        },
        methods: {
            back() {
                alert('back');
            },
            submit() {
                const data = {
                    email: this.email,
                };

                http.post('/password/email', data).then((response) => {

                }).catch((response) => {
                    this.errors = response.errors
                })
            }
        }

    }
</script>
