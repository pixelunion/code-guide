// bad
dragon.age();
dragon.age(25);

// good
dragon.getAge();
dragon.setAge(25);

// bad
if (!dragon.born()) {
  return false;
}

// good
if (!dragon.isBorn()) {
  return false;
}

// ok
class Jedi {
  constructor(options = {}) {
    const lightsaber = options.lightsaber || 'blue';
    this.set('lightsaber', lightsaber);
  }

  set(key, val) {
    this[key] = val;
  }

  get(key) {
    return this[key];
  }
}
