# Buto-Plugin-DisplayTime_v1

Show live time on a page like 16:32:18.

## Include

Include on page.

```
type: widget
data:
  plugin: display/time_v1
  method: include
```

## Show

Show span with time. Span element will have id and class as plugin_display_time_v1. One could also add more classes via data/class param.

```
type: widget
data:
  plugin: display/time_v1
  method: show
  data:
    class: label label-info label-as-badge
```
