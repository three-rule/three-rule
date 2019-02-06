import axios from 'axios'

const state = {
    users: null
}

const actions = {
    async getUsers({ commit }) {
        const res = await axios.get('/api/users')
        // console.log(res.data)
        commit('getUsers', res.data)
    }
}


const mutations = {
    getUsers(state, payload) {
        // console.log(payload)
        Object.assign(state, { users: payload })
    }
}


const getters = {
    getUser: (state) => {
        console.log(state.users)
        return state.users
    },
    getUserName: (state, getters) => (id) => {
        console.log(state.users)
        return getters.getUser.find(user => user.id == id)
    }
}

export default {
    namespaced: true,
    state,
    actions,
    mutations,
    getters
}