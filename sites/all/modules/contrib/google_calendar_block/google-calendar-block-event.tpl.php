<?php

/**
 * @file
 * Default theme implementation for displaying a calendar event.
 *
 * Each event is a list item in an unordered list.
 *
 * Available variables:
 * - $title: Title of the event.
 * - $author: Event's author.
 * - $summary: A summary of the event.
 * - $content: A description of the event.
 * - $start: The time at which the event starts.
 * - $end: The time at which the event ends.
 * - $where: Event's location.
 *
 * @see template_preprocess()
 * @see template_process()
 */
?>
<div class="event">
  <?php if ($title): ?>
    <div class="title">
      <?php print $title; ?>
    </div>
  <?php endif; ?>
  <?php if ($where): ?>
    <div class="location">
      <?php print $where; ?>
    </div>
  <?php endif; ?>
  <?php if ($start): ?>
    <div class="date">
      <?php print $start; ?>
    </div>
  <?php endif; ?>
  <?php if ($content): ?>
    <div class="content">
      <?php print $content; ?>
    </div>
  <?php endif; ?>
</div>
