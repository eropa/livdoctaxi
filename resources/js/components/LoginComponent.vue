<template>
    <div class="box-collapse-wrap form">
        <form class="form-a" @submit="checkForm" v-if="showLogin">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="Type">e-mail</label>
                        <input type="text"
                               v-model="email"
                               name="email"
                               class="form-control form-control-lg form-control-a"
                               placeholder="e-mail">
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="Type">Пароль</label>
                        <input type="password"
                               name="password"
                               v-model="password"
                               class="form-control form-control-lg form-control-a"
                               placeholder="пароль">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="button" @click="checkForm" class="btn btn-b">Вход в систему</button>
                </div>
            </div>
        </form>
        <div v-if="load">
            <h2> Идет обработка данных </h2>
        </div>
        <div v-if="status">
            <h1> Вы успеешно зашли !! </h1>
        </div>
    </div>
</template>

<script>
    export default {
        name: "LoginComponent",
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                errors: [],
                email: '',
                password: '',
                status:false,
                showLogin:true,
                load:false,
            }
        },
        methods: {
            checkForm() {

                // анимация загрузки
                this.load=true;
                this.showLogin=false;

                // передаем токен
                var token = document.head.querySelector('meta[name="csrf-token"]');
                window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

                // AJAX  передаем параметры
                axios.post('/login', {
                    email: this.email,
                    password: this.password,
                }).then(response => {
                        if (response.data.status == "501") {
                            this.showLogin=true;
                            this.load=false;
                        }

                        if (response.data.status == "201") {
                            this.showLogin=false;
                            this.status=true;
                            this.load=false;
                            window.location.href = "/upanel";
                        }
                })
                .catch(error => console.log(error));
            }
        },
    }
</script>

<style scoped>

</style>