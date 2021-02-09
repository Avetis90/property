<template>
    <Layout>
        <div class="container">
            <SearchForm :form="form" :search="search"/>
            <DataTable :tableData="properties" :loading="loading"/>
        </div>
    </Layout>
</template>

<script>
    import Layout from './Layout';
    import DataTable from './DataTable';
    import SearchForm from './SearchForm';

    export default {
        components: {SearchForm, Layout, DataTable},
        data() {
            return {
                properties: [],
                loading: true,
                form: {
                    name: '',
                    minPrice: 0,
                    maxPrice: 0,
                    bedrooms: 0,
                    bathrooms: 0,
                    storeys: 0,
                    garages: 0,
                }
            }
        },
        methods: {
            search() {
                let searchParams = {};
                let queryString = '';
                const keys = Object.keys(this.form);
                keys.forEach(el => {
                    if (this.form[el] !== 0 && this.form[el]) {
                        searchParams[el] = this.form[el]
                    }
                });

                this.loading = true;
                queryString = new URLSearchParams(searchParams).toString()
                axios.get(`/api/properties/search?${queryString}`)
                    .then(res => {
                        this.properties = res.data;
                        this.loading = false
                    })

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
