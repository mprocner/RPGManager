<template>
    <div id="roller">

        <h1 class="text-grey-darker">Chat <i class="glyphicon glyphicon-shopping-cart"></i></h1>
        <div class="chat-history">
            <div class="chat-row" v-for="row in chatHistory">
                <div class="chat-row-message text-grey-darker">{{row.message}}</div>
                    <div class="chat-row-rollresult text-grey-darker" v-if="row.result">
                        <img src="/images/dice_icon.png" alt="dice">
                        {{row.result}}
                    </div>
            </div>
        </div>

        <div class="roller-buttons">

        <button v-on:click="rollD4" class="btn btn-info" >D4</button>
        <button v-on:click="rollD6" class="btn btn-info">D6</button>
        <button v-on:click="rollD10" class="btn btn-info">D10</button>
        <button v-on:click="rollD100" class="btn btn-info">D100</button>
        </div>
        <div class="chat-input">

            <input v-model="chatInput" v-on:keyup.enter="sendMessage" name="chat-input" placeholder="Enter message here ..."/>
        </div>

    </div>




</template>

<script>
    export default {
        mounted: function() {
            console.log('Roller Component mounteddddssssssssssssssss.')
            var component = this;


            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('85257f7345f940c15c61', {
                cluster: 'eu',
                encrypted: true
            });

            var channel = pusher.subscribe('rpgmanager-roller');
            channel.bind('dicerolled', function(data) {
                console.log(data);
                console.log(component);
                component.chatHistory.push({
                    message: data['message'],
                    result: data['result']
                });

            });

        },
        ready: function() {


        },
        data: function() {
            return {
                chatHistory: [],
                chatInput: ''
            }
        },
        props: {

        },
        methods: {
            sendMessage: function() {
                console.log('sending Message');
                var component = this;
                var message = component.chatInput;
                component.chatInput = '';
                this.$http.post('/roller/sendMessage', {
                    message: message,
                    _token: window.LaravelCsrf
                }).then(response => {
                }, response => {

                });
            },
            customRoll: function() {
                this.$http.post('/roller/roll', {

                })
            },
            rollD4: function() {
                this.$http.post('/roller/roll', {
                    dice: 4,
                    _token: window.LaravelCsrf
                }).then(response => {
                }, response => {
                    // error callback
                });

            },
            rollD6: function() {
                this.$http.get('/roller/rolld6').then(response => {
                    // success callback
                }, response => {
                    // error callback
                });

            },
            rollD10: function() {
                this.$http.get('/roller/rolld10').then(response => {
                    // success callback
                }, response => {
                    // error callback
                });

            },
            rollD100: function() {
                this.$http.get('/roller/rolld100').then(response => {
                    // success callback
                }, response => {
                    // error callback
                });

            },
        }
    }
</script>
