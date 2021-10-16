<template>
    
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
            info: {}
        }
    },
    mounted(){
        axios.get(this.url).then((resp =>{
            console.log(resp)
        }));
    }
}
</script>
