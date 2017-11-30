import React from 'react';
import { render } from 'react-dom';

import Agenda from '../components/Agenda';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    render(<Agenda />, document.querySelector("#agenda"));
  },
};
