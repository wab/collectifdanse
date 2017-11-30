import React, { Component } from "react";
import PropTypes from "prop-types";
import moment from "moment";

import Loader from "../components/Loader";
import Thumbnail from "../components/Thumbnail";

moment.locale('fr_FR');

const truncate = (text, maxLength) => {
  let res = text;
  if (res.length > maxLength) {
    res = `${res.substr(0,maxLength-3)} &hellip;`;
  }
  return res;
}

class AgendaExcerpt extends Component {
  render() {
    const { event } = this.props;
    console.log({event})
    const company = event.acf.compagnie.name;
    const choregraphe = event.acf.choregraphes;
    const start = moment(event.acf.event_start_date);
    const end = moment(event.acf.event_end_date);
    const isPeriod = !start.isSame(end);

    const date = isPeriod ? `Du ${start.format('dddd D MMMM YYYY')} au ${end.format('dddd D MMMM YYYY')}` : `Le ${start.format('dddd D MMMM YYYY')}`;

    return (
      <article>
        <Thumbnail id={event.featured_media} />
        <h2 dangerouslySetInnerHTML={{ __html: event.title.rendered }}></h2>
        <h3>
          {!!company && (<span>Cie {company}</span>)}
          {!!choregraphe && (<small> / {choregraphe}</small>)}
        </h3>
        <i className="fa fa-calendar"></i> {date}
        <div dangerouslySetInnerHTML={{ __html: truncate(event.content.rendered, 300) }}></div>
      </article>
    )
  }
}

export default class Agenda extends Component {
  constructor() {
    super();
    // getinitialState
    this.state = {
      events: [],
      ready: false,
    };
  }

  componentDidMount() {
    const dataURL = `/wp-json/wp/v2/agenda/?per_page=30`;
    fetch(dataURL)
      .then(response => response.json())
      .then(response => {
        Array.isArray(response) && this.setState({ events: response, ready: true });
      });
  }

  renderAgenda() {
    const events = this.state.events;
    const comingEvents = events.filter(event => moment(event.acf.event_end_date).isSameOrAfter());
    console.log({events});
    return (
      <div className="Agenda">
        <ol>{comingEvents.map((event) => <li key={event.id}><AgendaExcerpt event={event} /></li>)}</ol>
      </div>
    );
  }

  render() {
    return this.state.ready ? this.renderAgenda() : <Loader/>;
  }
}

AgendaExcerpt.propTypes = {
  event: PropTypes.object,
};
