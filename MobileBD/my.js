$('#navbar li').click(function() {
    $(this).addClass('active').siblings('li').removeClass('active');
});

const products = [
  {name: 'Product 1', usage: 'Home', skill: 'Easy', price: 100.00},
  {name: 'Product 2', usage: 'Home', skill: 'Intermediate', price: 120.00},
  {name: 'Product 3', usage: 'Office', skill: 'Intermediate', price: 190.00},
  {name: 'Product 4', usage: 'Office', skill: 'Advanced', price: 260.00},
  {name: 'Product 5', usage: 'Warehouse', skill: 'Advanced', price: 320.00},
  {name: 'Product 6', usage: 'Farm', skill: 'Intermediate', price: 120.00},
  {name: 'Product 7', usage: 'Space', skill: 'Advanced', price: 157920.00},
  {name: 'Product 8', usage: 'Bathroom', skill: 'Easy', price: 9.00}
]

const tru = val => Boolean(val) === true

const hashValues = () => (
  location.hash.replace(/^#/, '').split(',').filter(tru)
)

const activeFilters = hashValues()

const vm = new Vue({
  el: '#app',
  data: {
    get uses() { 
      return R.pipe(R.pluck('usage'), R.uniq)(products)
    },
    get skills() { 
      return R.pipe(R.pluck('skill'), R.uniq)(products)
    },
    get filters() {
      return {
        'Usage': this.uses,
        'Skill': this.skills
      }
    },
    get filteredProducts() {
      // products that have either a skill or usage value present within active filters
      if (!this.activeFilters.length) return this.products
      return this.products.filter(prod => (
        [prod.skill, prod.usage].some(val => this.activeFilters.includes(val))
      ))
    },
    activeFilters,
    products
  },
  methods: {
    clearFilters() {
      this.activeFilters.splice(0, this.activeFilters.length)
    }
  },
  watch: {
    activeFilters: newVal => {
      location.hash = newVal.join(',')
    }
  }
})

window.onhashchange = () => {
  activeFilters.splice(0, activeFilters.length, ...hashValues())
}