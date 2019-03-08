
const state = {
  menu: [],
  authenticated: false,
}

const actions = {
  async getMenu({ commit }, payload) {
    console.log(payload)
    const res = await axios.get('/club/'+ payload +'/menu', payload)
    commit('setMyMenu', res.data)
  }
};

const mutations = {
  setMyMenu(state, payload) {
    Object.assign(state, { menu: payload })
  }
};

const getters = {
    
  myClubMenu: (state, getters, rootState) => state.menu,
  
  oneMenuData: (state, getters, rootState) => {
         const menuId = Number(rootState.route.params.menu_id);
        //  console.log(menuId)
         console.log(getters.myClubMenu.find(item => item.id == menuId));
         return getters.myClubMenu.find(item => item.id === menuId);
  }
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};