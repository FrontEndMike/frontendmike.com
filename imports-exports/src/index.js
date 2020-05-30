import greeting, { SEARCH_URL as SEARCH, SEARCH_QUERY } from "./consts.js";

(async () => {
  try {
    console.log(greeting);
    const API_URL = `${SEARCH}${SEARCH_QUERY}`;

    const res = await fetch(API_URL);
    const data = await res.json();

    console.log(data);
  } catch (error) {
    console.error(error.message);
  }
})();

