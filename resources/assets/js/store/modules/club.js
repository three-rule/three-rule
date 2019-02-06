import axios from 'axios'


const state = {
  clubData: [],
  authenticated: false,
}

const actions = {
  async getClub({ commit }) {
    const res = await axios.get('/api/club')
    commit('setClub', res.data)
  },
  
  async addDiscussion({ commit }, payload) {
    const res = await axios.post('/api/discussion', payload)
    commit('addDiscussion', res.data)
  },
  
  async addDiscussionLike({ commit }, payload) {
    const res = await axios.post('/api/discussion/like', payload)
    commit('addDiscussionLike', res.data)
  },
  
  async sendComment({ commit }, payload) {
    const res = await axios.post('/api/discussion/comment', payload)
    commit('sendComment', res.data)
  },
  
  async editSendComment({ commit }, payload) {
    const res = await axios.post('/api/discussion/comment/edit', payload)
    commit('editSendComment', res.data)
  },
  async deleteSendComment({ commit }, payload) {
    const res = await axios.post('/api/discussion/comment/delete', payload)
    commit('deleteSendComment', res.data)
  }
};

const mutations = {
  setClub(state, payload) {
    Object.assign(state, { clubData: payload })
  },
  addDiscussion(state, payload) {
    Object.assign(state, { clubData: payload })
  },
  addDiscussionLike(state, payload) {
    Object.assign(state, { clubData: payload })
  },
  sendComment(state, payload) {
    Object.assign(state, { clubData: payload })
  },
  editSendComment(state, payload) {
    Object.assign(state, { clubData: payload })
  },
  deleteSendComment(state, payload) {
    Object.assign(state, { clubData: payload })
  }
  
};

const getters = {
  clubData:　(state, getters, rootState) => state.clubData,
  
  fetchIndividualClubData: (state, getters, rootState) => {
    const clubId = Number(rootState.route.params.id);
    console.log(clubId)
    console.log(getters.clubData.find(item => item.id == clubId));
    return getters.clubData.find(item => item.id == clubId);
  },
  
  getDiscussionData: (state, getters, rootState) => {
    const discussionId = Number(rootState.route.params.discuss_id);
    const clubId = Number(rootState.route.params.club_id);
    const DiscussionData = getters.clubData.find(item => item.id == clubId).discussion.find(discussion => discussion.id == discussionId)
    return DiscussionData
  }
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};