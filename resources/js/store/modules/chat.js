const state = {
    messages: null,
    messagesStatus: null,
    chatId: null,
    chats: [],
    chatsStatus: null,
};
const getters = {
    messages: state => {
        return state.messages;
    },
    messagesStatus: state => {
        return state.messagesStatus;
    },
    chatId: state => {
        return state.chatId;
    },
    chats: state => {
        return state.chats;
    },
    chatsStatus: state => {
        return state.chatsStatus;
    }
};
const actions = {
    async fetchChatMessages({commit}, recipientId) {
        commit("setMessagesStatus", "loading");
        try {
            const messages = (await axios.get('/api/messages', {params: {recipient_id: recipientId}})).data;
            commit("setMessages", messages);
            commit("setMessagesStatus", "success");
        } catch (error) {
            commit("setMessagesStatus", "error");
        }
    },
    async markChatIsRead({commit}, recipientId) {
        commit("setAuthUserFriendsStatus", "loading");
        try {
            const friends = (await axios.get('/api/mark-chat-is-read', {params: {recipient_id: recipientId}})).data;
            commit("setAuthUserFriends", friends);
            commit("setAuthUserFriendsStatus", "success");
        } catch (error) {
            commit("setAuthUserFriendsStatus", "error");
        }
    },
    async fetchChats({commit}) {
        commit("setChatsStatus", "loading");
        try {
            const chats = (await axios.get('/api/chat/list')).data;
            commit("setChats", chats);
            commit("setChatsStatus", "success");
        } catch (error) {
            commit("setChatsStatus", "error");
        }
    }
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
    },
    setChatId(state, id) {
        state.chatId = id;
    },
    setChats(state, chats) {
        state.chats = chats;
    },
    setChatsStatus(state, status) {
        state.chatsStatus = status;
    }
};

export default {state, getters, actions, mutations};
