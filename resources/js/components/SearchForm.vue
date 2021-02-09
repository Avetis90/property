<template>
    <el-form ref="form" :model="form" label-width="120px">
        <el-row :gutter="20">
            <el-col :lg="12" :sm="24">
                <el-form-item label="Name">
                    <el-input v-model="form.name"></el-input>
                </el-form-item>
            </el-col>
            <el-col :lg="6" :sm="12">
                <el-form-item label="Price (min)">
                    <el-input-number v-model="form.minPrice" controls-position="right" :min="0"
                                     class="input-number"></el-input-number>
                </el-form-item>
            </el-col>
            <el-col :lg="6" :sm="12">
                <el-form-item label="Price (max)">
                    <el-input-number v-model="form.maxPrice" controls-position="right" :min="0"
                                     class="input-number"></el-input-number>
                </el-form-item>
            </el-col>
        </el-row>
        <el-row :gutter="20">
            <el-col :lg="6" :sm="12">
                <el-form-item label="Bedrooms">
                    <el-input-number v-model="form.bedrooms" controls-position="right" :min="0"
                                     class="input-number"></el-input-number>
                </el-form-item>
            </el-col>
            <el-col :lg="6" :sm="12">
                <el-form-item label="Bathrooms">
                    <el-input-number v-model="form.bathrooms" controls-position="right" :min="0"
                                     class="input-number"></el-input-number>
                </el-form-item>
            </el-col>

            <el-col :lg="6" :sm="12">
                <el-form-item label="Storeys">
                    <el-input-number v-model="form.storeys" controls-position="right" :min="0"
                                     class="input-number"></el-input-number>
                </el-form-item>
            </el-col>
            <el-col :lg="6" :sm="12">
                <el-form-item label="Garages">
                    <el-input-number v-model="form.garages" controls-position="right" :min="0"
                                     class="input-number"></el-input-number>
                </el-form-item>
            </el-col>
        </el-row>
        <el-form-item>
            <el-button type="primary" @click="search">Search</el-button>
        </el-form-item>
    </el-form>
</template>

<script>
    export default {
        props: {
            form: {
                type: Object,
                required: true
            },
            search: {
                type: Function,
                required: true
            }
        }
    }
</script>

<style scoped>
    .input-number {
        width: 100%;
    }
</style>
