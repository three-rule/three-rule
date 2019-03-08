
const state = {
  clubData: [],
  selectClubData: [],
  authenticated: false,
}

const actions = {
  async getClub({ commit }, payload) {
    const res = await axios.get('/club/'+ payload, payload)
    commit('setClub', res.data)
  },
  async selectClub({ commit }, payload) {
    const res = await axios.get('/selectclub/' + payload, payload)
    commit('selectClub', res.data)
  },
  
  
  // async addDiscussion({ commit }, payload) {
  //   const res = await axios.post('/discussion', payload)
  //   commit('addDiscussion', res.data)
  // },
  // async addDiscussionLike({ commit }, payload) {
  //   const res = await axios.post('/discussion/like', payload)
  //   commit('addDiscussionLike', res.data)
  // },
  // async sendComment({ commit }, payload) {
  //   const res = await axios.post('/discussion/comment', payload)
  //   commit('sendComment', res.data)
  // },
  // async editSendComment({ commit }, payload) {
  //   const res = await axios.post('/discussion/comment/edit', payload)
  //   commit('editSendComment', res.data)
  // },
  // async deleteSendComment({ commit }, payload) {
  //   const res = await axios.post('/discussion/comment/delete', payload)
  //   commit('deleteSendComment', res.data)
  // }
};

const mutations = {
  setClub(state, payload) {
    Object.assign(state, { clubData: payload })
  },
  selectClub(state, payload) {
    Object.assign(state, { selectClubData: payload })
  },
  // addDiscussion(state, payload) {
  //   Object.assign(state, { clubData: payload })
  // },
  // addDiscussionLike(state, payload) {
  //   Object.assign(state, { clubData: payload })
  // },
  // sendComment(state, payload) {
  //   Object.assign(state, { clubData: payload })
  // },
  // editSendComment(state, payload) {
  //   Object.assign(state, { clubData: payload })
  // },
  // deleteSendComment(state, payload) {
  //   Object.assign(state, { clubData: payload })
  // }
};

const getters = {
  clubData:　(state, getters, rootState) => state.clubData.data,
  
  selectClubData:　(state, getters, rootState) => state.selectClubData.data,
  
  // clubMemberData: (state, getters, rootState) => {
  //   const clubId = Number(rootState.route.params.id);
  //   console.log(clubId)
  //   console.log(getters.clubData.filter(item => item.club_member));
  //   return getters.clubData.filter(item => item.club_member);
  // },
  
  // getDiscussionData: (state, getters, rootState) => {
  //   const discussionId = Number(rootState.route.params.discuss_id);
  //   const clubId = Number(rootState.route.params.club_id);
  //   const DiscussionData = getters.clubData.find(item => item.id == clubId).discussion.find(discussion => discussion.id == discussionId)
  //   return DiscussionData
  // },
  
  // fetchClubJournalData: (state, getters, rootState) => {
  //     const clubId = Number(rootState.route.params.id);
  //     return getters.clubData.find(item => item.journal.id === clubId);
  // }
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};