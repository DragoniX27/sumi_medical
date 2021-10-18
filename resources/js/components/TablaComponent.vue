<template>
    <div>
        <button @click="console.log(this.headers)">holo</button>
        <table class="table">
            <thead>
                <tr v-for="(header, i) in headers" :key="i">
                    <th>{{header}}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(valores, i) in info" :key="i+'tr'">
                    <td v-for="(valor, x) in headers" :key="x+'td'">
                        {{ valores[valor] }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: 'tabla-info',
        props: {
            url: {
                type: String,
                require: true
            }
        },
        data() {
            return{
                headers: [],
                info: []
            }
        },
        mounted(){
            axios.get(this.url).then((resp) => {
                this.headers = resp.data.headers
                this.info = resp.data.info
            });
        }
    }
</script>
