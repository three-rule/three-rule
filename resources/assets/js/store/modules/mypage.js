
const state = {
  mypage: [],
  authenticated: false,
}

const actions = {
  async getMypage({ commit }, data) {
    const res = await axios.get('/api/mypage', data)
    commit('setMypage', res.data)
  }
};

const mutations = {
  setMypage(state, payload) {
    Object.assign(state, { mypage: payload })
  }
};

const getters = {
   mypage: (state, getters, rootState) => state.mypage,
  
   fetchIndividualMypageData: (state, getters, rootState) => {
         const mypageId = Number(rootState.route.params.id);
         return getters.mypage.find(mypage => mypage.id === mypageId);
   }
};



export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};