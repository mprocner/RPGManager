<template>

    <div class="modal" tabindex="-1" role="dialog" id="invite-modal" v-bind:style="{ display: $root.showInviteModal? 'block': 'none' }">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title {{ trans('Invite') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="$root.showInviteModal = false">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        mounted: function() {
            console.log('Roller Component mounteddddssssssssssssssss.')
            var component = this;

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

        }
    }
</script>
