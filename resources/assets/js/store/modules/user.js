import axios from 'axios'
import http from '../../services/http'
import types from '../mutation-types'
// import router from '../../router/router'

const state = {
    user: null,
    authenticate: false
}

const actions = {
    register({ commit }, payload) {
        return new Promise(resolve => {
            http.post('/register', payload, res => {
                commit(types.REGISTER_AUTH, res.data)
                console.log('register, ok')
                resolve()
            },e => {
                alert('Emailを正しく入力してください。')
            })
        })
        
    },
    login({ commit }, payload) {
        return new Promise(resolve => {
            http.post('/login', payload, res => {
                commit(types.LOGIN_AUTH, res.data)
                console.log('login, ok')
                resolve()
            },e => {
                alert('Emailかpasswordが間違っています。')
            })
            
        })
    },
    logout({ commit }) {
        return new Promise(resolve => {
            http.get('/logout', () => {
                commit(types.LOGOUT_AUTH)
                resolve()
            }, null)
        })
        
    },
    async getUsers({ commit }) {
        const res = await axios.get('/users')
        // console.log(res.data)
        commit('getUsers', res.data)
    }
}


const mutations = {
    [types.REGISTER_AUTH](state, payload) {
        //state.user = payload.user
        //state.authenticate = true
        console.log('1-1')
    },
    [types.LOGIN_AUTH](state, payload) {
        state.user = payload.user
        state.authenticate = true
        console.log('1-2')
    },
    [types.LOGOUT_AUTH](state) {
        localStorage.removeItem('jwt-token')
        state.user = null
        state.authenticate = false
    },
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