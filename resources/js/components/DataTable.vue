<template>
    <el-table
        :data="tableData"
        v-loading="loading"
        stripe
        lazy
        style="width: 100%">
        <el-table-column
            prop="name"
            label="Name"
        />
        <el-table-column
            prop="price"
            label="Price"
        />
        <el-table-column
            prop="bedrooms"
            label="Bedrooms"
        />
        <el-table-column
            prop="bathrooms"
            label="Bathrooms"
        />
        <el-table-column
            prop="storeys"
            label="Storeys"
        />
        <el-table-column
            prop="garages"
            label="Garages"
        />
    </el-table>
</template>

<script>
    export default {
        props: {
            tableData: {
                required: true,
                type: Array,
                default: []
            },
            loading: {
                type: Boolean
            }
        }
    }
</script>

<style scoped>

</style>
