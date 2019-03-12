
const state = {
  discussionData: [],
//   addDiscussionData: [],
  authenticated: false,
}

const actions = {
  async getDiscussion({ commit }, payload) {
    const res = await axios.get('/club/'+ payload +'/discussion', payload)
    commit('getDiscussion', res.data)
  },
  async addDiscussion({ commit }, payload) {
    const res = await axios.post('/club/'+ payload.club_id +'/discussion', payload.body, payload.image)
    commit('addDiscussion', res.data)
  },
  async addDiscussionLike({ commit }, payload) {
    const res = await axios.post('/club/'+ payload.club_id +'/discussion/'+ payload.discuss_id +'/like', payload)
    commit('addDiscussionLike', res.data)
  },
  async sendComment({ commit }, payload) {
    const res = await axios.post('club/'+ payload.club_id +'/discussion/'+ payload.discuss_id +'/comment', payload.comment)
    commit('sendComment', res.data)
  },
  async editSendComment({ commit }, payload) {
    const res = await axios.put('club/'+ payload.club_id +'/discussion/'+ payload.discuss_id+'/commentupdate/'+ payload.discuss_comment_id, payload.comment)
    commit('editSendComment', res.data)
  },
  async deleteSendComment({ commit }, payload) {
    const res = await axios.delete('club/'+ payload.club_id +'/discussion/'+ payload.discuss_id+'/commentupdate'+ payload.discuss_comment_id, payload)
    commit('deleteSendComment', res.data)
  }
};

const mutations = {
  getDiscussion(state, payload) {
    Object.assign(state, { discussionData: payload })
  },
  addDiscussion(state, payload) {
    Object.assign(state, { discussionData: payload })
  },
  addDiscussionLike(state, payload) {
    Object.assign(state, { discussionData: payload })
  },
  sendComment(state, payload) {
    Object.assign(state, { discussionData: payload })
  },
  editSendComment(state, payload) {
    Object.assign(state, { discussionData: payload })
  },
  deleteSendComment(state, payload) {
    Object.assign(state, { discussionData: payload })
  }
};

const getters = {
  discussionData:　(state, getters, rootState) => state.discussionData.data,
  
   getDiscussionData: (state, getters, rootState) => {
     const discussionId = Number(rootState.route.params.discuss_id);
     console.log(discussionId);
     const clubId = Number(rootState.route.params.club_id);
     console.log(getters.discussionData[0].discussion);
     const DiscussionData = getters.discussionData[0].discussion.find(item => item.id == discussionId)
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