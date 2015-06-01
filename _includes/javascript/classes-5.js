// bad
const person = {
  firstName: 'Jimmy',
  lastName: 'Smith',

  get fullName() {
    return this.firstName + ' ' + this.lastName;
  },

  set fullName(name) {
    const words = name.toString().split(' ');
    this.firstName = words[0] || '';
    this.lastName = words[1] || '';
  },
}
