// bad
const StyleGuide = require('./StyleGuide');
module.exports = StyleGuide.es6;

// ok
import StyleGuide from './StyleGuide';
export default StyleGuide.es6;

// best
import { es6 } from './StyleGuide';
export default es6;
