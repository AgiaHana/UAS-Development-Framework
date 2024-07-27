// resources/js/components/ItemList.vue
<template>
    <div>
        <h1>Item List</h1>
        <ul>
            <li v-for="item in items" :key="item.id">{{ item.name }} ({{ item.stock }})</li>
        </ul>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            items: []
        }
    },
    mounted() {
        axios.get('http://localhost:8000/api/items')
            .then(response => {
                this.items = response.data.data;
            });
    }
}
</script>
