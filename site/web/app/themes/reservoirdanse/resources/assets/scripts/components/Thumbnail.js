import React, { Component } from "react";
import PropTypes from "prop-types";

export default class Thumbnail extends Component {

  constructor() {
    super();
    // getinitialState
    this.state = {
      img: null,
      ready: false,
    };
  }

  componentDidMount() {
    const dataURL = `/wp-json/wp/v2/media/${this.props.id}`;
    fetch(dataURL)
      .then(response => response.json())
      .then(response => {
        console.log(response);
        !!response.source_url && this.setState({ img: response, ready: true });
      });
  }
  renderThumb() {
    const url = this.state.img.source_url;
    const alt = this.state.img.title;
    return (
      <figure>
        <img src={url} alt={alt} width="250px" />
      </figure>
    );
  }
  render() {
    return this.state.ready ? this.renderThumb() : null;
  }
}

Thumbnail.propTypes = {
  id: PropTypes.number,
};
