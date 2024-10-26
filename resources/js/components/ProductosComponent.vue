<template>
    <div>
        <h1>Product Data</h1>
        <div v-if="loading">Loading...</div>
        <div v-else>
            <table class="table table-sm table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>En Stock</th>
                </tr>
            </thead><tbody>
                <tr v-for="producto in productos" :key="producto.id">
                    <td>{{ producto.nombre }}</td>
                    <td>{{ producto.descripcion }}</td>
                    <td>{{ producto.precio }}</td>
                    <td><img :src="producto.imagen" alt="Product Image" width="200"/></td>
                    <td>{{ producto.en_stock }}</td>
                </tr></tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            productos: [],
            loading: true,
        };
    },
    mounted() {
        this.fetchProductosData();
    },
    methods: {
        async fetchProductosData() {
            try {
                const response = await axios.get('/productos-data');
                this.productos = response.data;
            } catch (error) {
                console.error(error);
            } finally {
                this.loading = false;
            }
        }
    }
};
</script>
