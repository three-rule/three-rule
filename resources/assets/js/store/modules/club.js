
const state = {
  clubData: [],
  authenticated: false,
}

const actions = {
  async getClub({ commit }, data) {
    const res = await axios.get('/api/club', data)
    commit('setClub', res.data)
  }
};

const mutations = {
  setClub(state, payload) {
    Object.assign(state, { clubData: payload })
  }
};

const getters = {
  clubData:　(state, getters, rootState) => state.clubData,
  
  fetchIndividualClubData: (state, getters, rootState) => {
      const clubId = Number(rootState.route.params.id);
      return getters.clubData.find(item => item.id === clubId);
  }
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};