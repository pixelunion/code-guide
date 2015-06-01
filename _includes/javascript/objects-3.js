function getKey(k) {
  return `a key named ${k}`;
}

// bad
const obj = {
  name: 'San Francisco',
};
obj[getKey('enabled')] = true;

// good
const obj = {
  name: 'San Francisco',
  [getKey('enabled')]: true,
};
