window._ = require('lodash');
require('bootstrap');

window.Vue = require('vue');
var VueResource = require('vue-resource');
Vue.prototype.trans = (key) => {
    return _.get(window.trans, key, key);
};

Vue.use(VueResource);

Vue.component('room-list-component', require('./components/RoomListComponent.vue'));
Vue.component('invite-modal', require('./components/InviteModal.vue'));

console.log('asdf');
const app = new Vue({
    el: '#app',
    data: {
        'showInviteModal': false,
    },

});
