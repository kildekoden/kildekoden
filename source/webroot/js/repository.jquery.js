/**
 * GitHub Repository Overview.
 *
 * @author Chris Vogt [mail@chrisvogt.me]
 */
$(function() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: endpoint,
        success: function (data) {
            $('#commits').empty()
              .html(renderTable(data));
        }
    });

/**
 * Builds the data table.
 *
 * @param {array} data - JSON data to parse.
 */
    function renderTable(data) {
      for (var i = 0; i < data.length; i++) {
        renderRow(data[i]);
      }
    }

/**
 * Builds a table row.
 *
 * @param {array} data - Data for this row.
 */
    function renderRow(data) {
      $("#commits").append($('<tr>')
        .append($('<td>')
          .append($('<a>')
            .attr('href', data['url'])
            .attr('title', 'View commit on GitHub')
            .text(data['sha'].substring(0, 6))
          )
        )
        .append($('<td>')
          .append($('<a>')
            .attr('href', data['author_url'])
            .attr('title', data['author_username'] + ' on GitHub')
            .text(data['author_username'])
          )
        )
        .append($('<td>')
          .text(moment(data['timestamp']).fromNow())
        )
        .append($('<td>')
          .text(data['message'].substring(0, 74) + '...')
        )
      );
    }
});
