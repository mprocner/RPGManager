<template>
    <div id="roller-app">

        <h1>Roller</h1>
        <button v-on:click="rollDice" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded" >D6</button>

        <button class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">D10</button>
        <button class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">D20</button>
        <button class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">D100</button>
    </div>




</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            rollDice: function() {
                console.log('rolling');
            }
        }
    }
</script>
