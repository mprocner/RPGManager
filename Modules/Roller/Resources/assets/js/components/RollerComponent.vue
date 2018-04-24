<template>
    <div>

        <h1>Roller</h1>
        <button v-on:click="rollD4" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded" >D4</button>

        <button v-on:click="rollD6" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">D6</button>
        <button v-on:click="rollD10" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">D10</button>
        <button v-on:click="rollD100" class="bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">D100</button>

        <textarea v-model="rollHistory" name="roll-history" id="roll-history" cols="30" rows="10"></textarea>

        <span>{{rollHistory}}</span>
    </div>




</template>

<script>
    export default {
        mounted() {
            console.log('Component mounteddddssssssssssssssss.')
        },
        data: {
            rollHistory: "asdf"
        },
        methods: {
            rollD4: function() {
                this.$http.get('/roller/rolld4').then(response => {
                    this.rollHistory=response.body+", ";
                }, response => {
                    // error callback
                });

            },
            rollD6: function() {
                this.$http.get('/roller/rolld6').then(response => {
                    // success callback
                    this.rollHistory+=response.body+", ";
                }, response => {
                    // error callback
                });

            },
            rollD10: function() {
                this.$http.get('/roller/rolld10').then(response => {
                    // success callback
                    this.rollHistory+=response.body+", ";
                }, response => {
                    // error callback
                });

            },
            rollD100: function() {
                this.$http.get('/roller/rolld100').then(response => {
                    // success callback
                    this.rollHistory+=response.body+", ";
                    alert(this.rollHistory);
                }, response => {
                    // error callback
                });

            },
        }
    }
</script>
