<template>
    <Layout>
        <div class="container">
            <DataTable :tableData="properties" :loading="loading"/>
        </div>
    </Layout>
</template>

<script>
    import Layout from './Layout';
    import DataTable from './DataTable';

    export default {
        components: { Layout, DataTable},
        data() {
            return {
                properties: [],
                loading: true,
            }
        },
        async mounted() {
            axios.get('/api/properties')
                .then(res => {
                    this.properties = res.data
                    this.loading = false
                })
                .catch(e => console.log(e))
        }
    }
</script>

<style>
    .container{
        padding: 30px 0;
    }
</style>
