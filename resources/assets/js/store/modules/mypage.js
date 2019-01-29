
const state = {
  mypage: {},
  authenticated: false,
}

const actions = {
  async getMypage({ commit }, data) {
    const res = await axios.get('/api/mypage', data)
    commit('setMypage', res.data)
  }
};

const mutations = {
  setMypage(state, mypage) {
    state.mypage = mypage
  }
};

const getters = {
  mypageData: (state, getters) => state.mypage,
  
  // fetchIndividualMypageData: (state, getters, rootState) => {
  //       const mypageId = Number(rootState.route.params.id);
  //       return getters.mypageData.find(mypage => mypage.id === mypageId);
  // },
  
  doneMypageDataCount: (state, getters) => {
      return getters.mypageData.length
  },
    
  filterMypage: (state, getters) => (id) => {
    // console.log(getters.mypageData.filter(mypage => mypage.id === id))
    console.log(getters.mypageData)
      return getters.mypageData.filter(mypage => mypage.id === id);
      
  }
};



export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};