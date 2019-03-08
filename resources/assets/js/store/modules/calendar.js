import types from '../mutation-types'

const state = {
  data: ''
}

const actions = {
  // getData({ commit }) {
  //   console.log(1)
  //   // console.log(localStorage.getItem('data'))
  //   let data = JSON.parse(localStorage.getItem('data'))
  //   console.log(data)
  //   commit(types.GET_DATA, data)
  // },
  async getData({ commit }, payload) {
      console.log(payload)
    const res = await axios.get('club/'+ payload +'/calendar', payload)
    console.log(res.data.data)
    commit(types.GET_DATA, res.data.data)
  },
  
  
  // addData({ commit }, payload) {
  //   let data = JSON.parse(localStorage.getItem('data'))
  //   data.push(payload)
  //   localStorage.setItem('data', JSON.stringify(data))
  //   commit(types.ADD_DATA, data)
  // },
  async addData({ commit }, payload) {
      console.log(payload)
    const res = await axios.post('club/'+ payload.club_id +'/calendar', payload)
    console.log(res.data.data)
    commit(types.GET_DATA, res.data.data)
  },
}

const mutations = {
  // [types.GET_DATA](state, payload) {
  //   state.data = payload
  // },
  
  [types.GET_DATA](state, payload) {
    Object.assign(state, { data: payload })
  },
  
  [types.ADD_DATA](state, payload) {
    state.data = payload
  }
}

const getters = {
  getAllData:(state, getters, rootState) => {
    // const clubId = Number(rootState.route.params.id);
    // console.log(clubId)
    console.log(state.data)
    // return state.data.data
    return state.data
  }
}

export default {
  namespaced: true,
  state,
  actions,
  mutations,
  getters,
}