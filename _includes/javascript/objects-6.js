const luke = {
  jedi: true,
  age: 28,
};

// bad
const isJedi = luke['jedi'];

// good
const isJedi = luke.jedi;

// good
function getProp(prop) {
  return luke[prop];
}

const isJedi = getProp('jedi');
