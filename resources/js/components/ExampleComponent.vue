<template>
    <b-container>
        <div>
            <b-row class="vh-100" align-v="center">
                <b-col cols="4"></b-col>
                <b-col cols="4" class="bg-login-form p-5">
                    
                    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                        <b-form-group
                            id="input-group-1"
                            label="Phone number:"
                            label-for="input-1"
                        >
                            <b-form-input
                            id="input-1"
                            v-model="form.phone"
                            type="text"
                            placeholder="Enter phone"
                            required
                            ></b-form-input>
                        </b-form-group>

                        <b-form-group id="input-group-2" label="Password:" label-for="input-2">
                            <b-form-input
                            id="input-2"
                            type="password"
                            v-model="form.password"
                            placeholder="Enter password"
                            required
                            ></b-form-input>
                        </b-form-group>
                        <div class="mt-3">
                            <b-button type="submit" variant="primary">Submit</b-button>
                            <b-button type="reset" variant="danger">Reset</b-button>
                        </div>
                    </b-form>
                </b-col>
                <b-col cols="4"></b-col>
            </b-row>
        </div>
    </b-container>
</template>

<script>
    import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
    // Import Bootstrap an BootstrapVue CSS files (order is important)
    import 'bootstrap/dist/css/bootstrap.css'
    import 'bootstrap-vue/dist/bootstrap-vue.css'
    // Make BootstrapVue available throughout your project
    Vue.use(BootstrapVue)
    // Optionally install the BootstrapVue icon components plugin
    Vue.use(IconsPlugin)
    export default {
    data() {
      return {
        form: {
          phone: '',
          password: '',
        },
        show: true
      }
    },
    methods: {
      onSubmit(event) {
        event.preventDefault()
        alert(JSON.stringify(this.form))
      },
      onReset(event) {
        event.preventDefault()
        // Reset our form values
        this.form.phone = ''
        this.form.password = ''
        console.log(JSON.stringify(this.form))
      }
    }
  }
</script>
<style lang="scss" scoped>
    @import "../../css/app.css";
</style> 
