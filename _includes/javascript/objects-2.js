// bad
const superman = {
  default: { clark: 'kent' },
  private: true,
  klass: 'alien',
};

// good
const superman = {
  defaults: { clark: 'kent' },
  hidden: true,
  type: 'alien',
};
