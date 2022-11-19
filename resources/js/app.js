const { default: axios } = require('axios');
const { transform } = require('lodash');

require('./bootstrap');
const messages = document.getElementById('messages');
const message_input = document.getElementById('message_input');
const message_form = document.getElementById('message_form');

message_form.addEventListener('submit', function(e){
    e.preventDefault();
    let error = false;
    if(message_input.value == '') {
        alert("Please type something and send");
        error = true;
    }
    if (error) {
        return;
    }
    const options = {
        method: 'post',
        url: '/Chatroom',
        data: {
            username: '',
            message: message_input.value
        },
        transformResponse: [(data) => {
            return data;
        }
    ]
    }
    axios(options);
});
window.Echo.channel('dealroom')
.listen('.message', (e) => {
    message_input.value = '';
    messages.innerHTML +='<div class="chat-message"><div class="mt-2 mb-1">'+ e.username +'</div><div class="py-5 px-5 text-sm bg-gray-200 rounded">'+ e.message + '</div></div>';
})

