// bad
(function() {
  const name = 'Skywalker'
  return name
})()

// good
(() => {
  const name = 'Skywalker';
  return name;
})();

// good (guards against the function becoming an argument when two files with IIFEs are concatenated)
;(() => {
  const name = 'Skywalker';
  return name;
})();
