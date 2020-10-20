const state = {
    messages: null,
    messagesStatus: null,
};
const getters = {
    messages: state => {
        return state.messages;
    },
    messagesStatus: state => {
        return state.messagesStatus;
    },
};
const actions = {
    async fetchChatMessages({commit}, recipientId){
        commit("setMessagesStatus", "loading");
        try {
            const messages = (await axios.get('/api/messages', {params: {recipient_id: recipientId}})).data;
            commit("setMessages", messages);
            commit("setMessagesStatus", "success");
        } catch (error) {
            commit("setMessagesStatus", "error");
        }
    },
};
const mutations = {
    setMessages(state, messages) {
        state.messages = messages;
    },
    setMessagesStatus(state, status) {
        state.messagesStatus = status;
    },
    pushMessage(state, message) {
        state.messages.data.push(message);
    }
};

export default { state, getters, actions, mutations };
