// bad
function handleThings(options) {
  // No! We shouldn't mutate function arguments.
  // Double bad: if opts is falsy it'll be set to an object which may
  // be what you want but it can introduce subtle bugs.
  this.options = options || {};
  // ...
}

// good
function handleThings(options = {}) {
  // ...
}

// good
function handleThings(options = {}) {
  this.options = Object.assign({}, options, {
    valueA: 'AAA',
  });
}
