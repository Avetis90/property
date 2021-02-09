<template>
    <el-container>
        <Header/>
        <el-main>
            <el-row>
                <el-col :span="20" :offset="2">
                    <slot/>
                </el-col>
            </el-row>
        </el-main>
        <Footer/>
    </el-container>
</template>

<script>
    import Header from './Header';
    import Footer from './Footer';

    export default {
        components: {
            Header,
            Footer
        }
    }
</script>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body .el-container {
        flex-direction: column;
        min-height: 100vh;
    }

    .el-header, .el-footer {
        background-color: #B3C0D1;
        color: #333;
        text-align: center;
        line-height: 60px;
        width: 100%;
    }

    .el-footer {
        margin-top: auto;
    }

    .el-main {
        color: #333;
        width: 100%;
    }

</style>
