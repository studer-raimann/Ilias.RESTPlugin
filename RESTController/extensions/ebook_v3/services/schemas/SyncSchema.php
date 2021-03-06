<?php
$schema = <<<'JSON'
{
  "definitions": {},
  "$schema": "http://json-schema.org/draft-07/schema#",
  "$id": "http://example.com/root.json",
  "type": "object",
  "title": "The Root Schema",
  "required": [
    "lastSyncTime",
    "sync",
    "notes",
    "bookmarks",
    "drawings",
    "highlights",
    "rectangles",
    "ellipses",
    "circles",
    "lines"
  ],
  "properties": {
    "lastSyncTime": {
      "$id": "#/properties/lastSyncTime",
      "type": "integer",
      "title": "The Lastsynctime Schema",
      "default": 0,
      "examples": [
        112222644
      ]
    },
    "sync": {
      "$id": "#/properties/sync",
      "type": "array",
      "title": "The Sync Schema",
      "items": {
        "$id": "#/properties/sync/items",
        "type": "object",
        "title": "The Items Schema",
        "required": [
          "itemId",
          "state",
          "type",
          "updateTime"
        ],
        "properties": {
          "itemId": {
            "$id": "#/properties/sync/items/properties/itemId",
            "type": "string",
            "title": "The Itemid Schema",
            "default": "",
            "examples": [
              "dafead5b-b6cd-41e7-a1e3-fcfff6d63381"
            ],
            "pattern": "^(.*)$"
          },
          "state": {
            "$id": "#/properties/sync/items/properties/state",
            "type": "string",
            "title": "The State Schema",
            "default": "",
            "examples": [
              "STORE"
            ],
            "pattern": "^(.*)$"
          },
          "type": {
            "$id": "#/properties/sync/items/properties/type",
            "type": "string",
            "title": "The Type Schema",
            "default": "",
            "examples": [
              "NOTE"
            ],
            "pattern": "^(.*)$"
          },
          "updateTime": {
            "$id": "#/properties/sync/items/properties/updateTime",
            "type": "integer",
            "title": "The Updatetime Schema",
            "default": 0,
            "examples": [
              112222646
            ]
          }
        }
      }
    },
    "notes": {
      "$id": "#/properties/notes",
      "type": "array",
      "title": "The Notes Schema",
      "items": {
        "$id": "#/properties/notes/items",
        "type": "object",
        "title": "The Items Schema",
        "required": [
          "id",
          "content",
          "page",
          "bookId"
        ],
        "properties": {
          "id": {
            "$id": "#/properties/notes/items/properties/id",
            "type": "string",
            "title": "The Id Schema",
            "default": "",
            "examples": [
              "dafead5b-b6cd-41e7-a1e3-fcfff6d63381"
            ],
            "pattern": "^(.*)$"
          },
          "content": {
            "$id": "#/properties/notes/items/properties/content",
            "type": "string",
            "title": "The Content Schema",
            "default": "",
            "examples": [
              "This is a note."
            ]
          },
          "page": {
            "$id": "#/properties/notes/items/properties/page",
            "type": "integer",
            "title": "The Page Schema",
            "default": 0,
            "examples": [
              1
            ]
          },
          "bookId": {
            "$id": "#/properties/notes/items/properties/bookId",
            "type": "integer",
            "title": "The Bookid Schema",
            "default": 0,
            "examples": [
              245
            ]
          }
        }
      }
    },
    "bookmarks": {
      "$id": "#/properties/bookmarks",
      "type": "array",
      "title": "The Bookmarks Schema",
      "items": {
        "$id": "#/properties/bookmarks/items",
        "type": "object",
        "title": "The Items Schema",
        "required": [
          "id",
          "content",
          "page",
          "bookId"
        ],
        "properties": {
          "id": {
            "$id": "#/properties/bookmarks/items/properties/id",
            "type": "string",
            "title": "The Id Schema",
            "default": "",
            "examples": [
              "dafead5b-b6cd-41e7-a1e3-fcfff6d63383"
            ],
            "pattern": "^(.*)$"
          },
          "content": {
            "$id": "#/properties/bookmarks/items/properties/content",
            "type": "string",
            "title": "The Content Schema",
            "default": "",
            "examples": [
              "The name of the bookmark"
            ],
            "pattern": "^(.*)$"
          },
          "page": {
            "$id": "#/properties/bookmarks/items/properties/page",
            "type": "integer",
            "title": "The Page Schema",
            "default": 0,
            "examples": [
              1
            ]
          },
          "bookId": {
            "$id": "#/properties/bookmarks/items/properties/bookId",
            "type": "integer",
            "title": "The Bookid Schema",
            "default": 0,
            "examples": [
              245
            ]
          }
        }
      }
    },
    "drawings": {
      "$id": "#/properties/drawings",
      "type": "array",
      "title": "The Drawings Schema",
      "items": {
        "$id": "#/properties/drawings/items",
        "type": "object",
        "title": "The Items Schema",
        "required": [
          "id",
          "bookId",
          "page",
          "content"
        ],
        "properties": {
          "id": {
            "$id": "#/properties/drawings/items/properties/id",
            "type": "string",
            "title": "The Id Schema",
            "default": "",
            "examples": [
              "dafead5b-b6cd-41e7-a1e3-fcfff6d63384"
            ],
            "pattern": "^(.*)$"
          },
          "bookId": {
            "$id": "#/properties/drawings/items/properties/bookId",
            "type": "integer",
            "title": "The Bookid Schema",
            "default": 0,
            "examples": [
              245
            ]
          },
          "page": {
            "$id": "#/properties/drawings/items/properties/page",
            "type": "integer",
            "title": "The Page Schema",
            "default": 0,
            "examples": [
              1
            ]
          },
          "content": {
            "$id": "#/properties/drawings/items/properties/content",
            "type": "array",
            "title": "The Content Schema",
            "items": {
              "$id": "#/properties/drawings/items/properties/content/items",
              "type": "object",
              "title": "The Items Schema",
              "required": [
                "id",
                "coordinates",
                "borderColor",
                "borderWidth",
                "rotation"
              ],
              "properties": {
                "id": {
                  "$id": "#/properties/drawings/items/properties/content/items/properties/id",
                  "type": "string",
                  "title": "The Id Schema",
                  "default": "",
                  "examples": [
                    "svg23435236"
                  ],
                  "pattern": "^(.*)$"
                },
                "coordinates": {
                  "$id": "#/properties/drawings/items/properties/content/items/properties/coordinates",
                  "type": "array",
                  "title": "The Coordinates Schema",
                  "items": {
                    "$id": "#/properties/drawings/items/properties/content/items/properties/coordinates/items",
                    "type": "object",
                    "title": "The Items Schema",
                    "required": [
                      "x",
                      "y",
                      "z"
                    ],
                    "properties": {
                      "x": {
                        "$id": "#/properties/drawings/items/properties/content/items/properties/coordinates/items/properties/x",
                        "type": "number",
                        "title": "The X Schema",
                        "default": 0.0,
                        "examples": [
                          12.23
                        ]
                      },
                      "y": {
                        "$id": "#/properties/drawings/items/properties/content/items/properties/coordinates/items/properties/y",
                        "type": "number",
                        "title": "The Y Schema",
                        "default": 0.0,
                        "examples": [
                          13.11
                        ]
                      },
                      "z": {
                        "$id": "#/properties/drawings/items/properties/content/items/properties/coordinates/items/properties/z",
                        "type": "integer",
                        "title": "The Z Schema",
                        "default": 0,
                        "examples": [
                          1
                        ]
                      }
                    }
                  }
                },
                "borderColor": {
                  "$id": "#/properties/drawings/items/properties/content/items/properties/borderColor",
                  "type": "string",
                  "title": "The Bordercolor Schema",
                  "default": "",
                  "examples": [
                    "#ffffffff"
                  ],
                  "pattern": "^(.*)$"
                },
                "borderWidth": {
                  "$id": "#/properties/drawings/items/properties/content/items/properties/borderWidth",
                  "type": "number",
                  "title": "The Borderwidth Schema",
                  "default": 0.0,
                  "examples": [
                    1.3
                  ]
                },
                "rotation": {
                  "$id": "#/properties/drawings/items/properties/content/items/properties/rotation",
                  "type": "number",
                  "title": "The Rotation Schema",
                  "default": 0.0,
                  "examples": [
                    1.4
                  ]
                }
              }
            }
          }
        }
      }
    },
    "highlights": {
      "$id": "#/properties/highlights",
      "type": "array",
      "title": "The Highlights Schema",
      "items": {
        "$id": "#/properties/highlights/items",
        "type": "object",
        "title": "The Items Schema",
        "required": [
          "id",
          "bookId",
          "page",
          "content"
        ],
        "properties": {
          "id": {
            "$id": "#/properties/highlights/items/properties/id",
            "type": "string",
            "title": "The Id Schema",
            "default": "",
            "examples": [
              "dafead5b-b6cd-41e7-a1e3-fcfff6d63385"
            ],
            "pattern": "^(.*)$"
          },
          "bookId": {
            "$id": "#/properties/highlights/items/properties/bookId",
            "type": "integer",
            "title": "The Bookid Schema",
            "default": 0,
            "examples": [
              245
            ]
          },
          "page": {
            "$id": "#/properties/highlights/items/properties/page",
            "type": "integer",
            "title": "The Page Schema",
            "default": 0,
            "examples": [
              4
            ]
          },
          "content": {
            "$id": "#/properties/highlights/items/properties/content",
            "type": "array",
            "title": "The Content Schema",
            "items": {
              "$id": "#/properties/highlights/items/properties/content/items",
              "type": "object",
              "title": "The Items Schema",
              "required": [
                "id",
                "color",
                "width",
                "height",
                "x",
                "y"
              ],
              "properties": {
                "id": {
                  "$id": "#/properties/highlights/items/properties/content/items/properties/id",
                  "type": "string",
                  "title": "The Id Schema",
                  "default": "",
                  "examples": [
                    "dafead5b-b6cd-41e7-a1e3-fcfff6d63386"
                  ],
                  "pattern": "^(.*)$"
                },
                "color": {
                  "$id": "#/properties/highlights/items/properties/content/items/properties/color",
                  "type": "string",
                  "title": "The Color Schema",
                  "default": "",
                  "examples": [
                    "#ffffff00"
                  ],
                  "pattern": "^(.*)$"
                },
                "width": {
                  "$id": "#/properties/highlights/items/properties/content/items/properties/width",
                  "type": "number",
                  "title": "The Width Schema",
                  "default": 0.0,
                  "examples": [
                    67.87
                  ]
                },
                "height": {
                  "$id": "#/properties/highlights/items/properties/content/items/properties/height",
                  "type": "number",
                  "title": "The Height Schema",
                  "default": 0.0,
                  "examples": [
                    87.12
                  ]
                },
                "x": {
                  "$id": "#/properties/highlights/items/properties/content/items/properties/x",
                  "type": "number",
                  "title": "The X Schema",
                  "default": 0.0,
                  "examples": [
                    245.33
                  ]
                },
                "y": {
                  "$id": "#/properties/highlights/items/properties/content/items/properties/y",
                  "type": "number",
                  "title": "The Y Schema",
                  "default": 0.0,
                  "examples": [
                    676.3
                  ]
                }
              }
            }
          }
        }
      }
    },
    "rectangles": {
      "$id": "#/properties/rectangles",
      "type": "array",
      "title": "The Rectangles Schema",
      "items": {
        "$id": "#/properties/rectangles/items",
        "type": "object",
        "title": "The Items Schema",
        "required": [
          "id",
          "bookId",
          "page",
          "content"
        ],
        "properties": {
          "id": {
            "$id": "#/properties/rectangles/items/properties/id",
            "type": "string",
            "title": "The Id Schema",
            "default": "",
            "examples": [
              "dafead5b-b6cd-41e7-a1e3-fcfff6d63386"
            ],
            "pattern": "^(.*)$"
          },
          "bookId": {
            "$id": "#/properties/rectangles/items/properties/bookId",
            "type": "integer",
            "title": "The Bookid Schema",
            "default": 0,
            "examples": [
              245
            ]
          },
          "page": {
            "$id": "#/properties/rectangles/items/properties/page",
            "type": "integer",
            "title": "The Page Schema",
            "default": 0,
            "examples": [
              4
            ]
          },
          "content": {
            "$id": "#/properties/rectangles/items/properties/content",
            "type": "array",
            "title": "The Content Schema",
            "items": {
              "$id": "#/properties/rectangles/items/properties/content/items",
              "type": "object",
              "title": "The Items Schema",
              "required": [
                "id",
                "borderColor",
                "borderWidth",
                "color",
                "width",
                "height",
                "x",
                "y",
                "z",
                "rotation"
              ],
              "properties": {
                "id": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/id",
                  "type": "string",
                  "title": "The Id Schema",
                  "default": "",
                  "examples": [
                    "dafead5b-b6cd-41e7-a1e3-fcfff6d63386"
                  ],
                  "pattern": "^(.*)$"
                },
                "borderColor": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/borderColor",
                  "type": "string",
                  "title": "The Bordercolor Schema",
                  "default": "",
                  "examples": [
                    "#ffffff00"
                  ],
                  "pattern": "^(.*)$"
                },
                "borderWidth": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/borderWidth",
                  "type": "number",
                  "title": "The Borderwidth Schema",
                  "default": 0.0,
                  "examples": [
                    3.56
                  ]
                },
                "color": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/color",
                  "type": "string",
                  "title": "The Color Schema",
                  "default": "",
                  "examples": [
                    "#ffffff00"
                  ],
                  "pattern": "^(.*)$"
                },
                "width": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/width",
                  "type": "number",
                  "title": "The Width Schema",
                  "default": 0.0,
                  "examples": [
                    67.12
                  ]
                },
                "height": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/height",
                  "type": "number",
                  "title": "The Height Schema",
                  "default": 0.0,
                  "examples": [
                    87.45
                  ]
                },
                "x": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/x",
                  "type": "number",
                  "title": "The X Schema",
                  "default": 0.0,
                  "examples": [
                    245.23
                  ]
                },
                "y": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/y",
                  "type": "number",
                  "title": "The Y Schema",
                  "default": 0.0,
                  "examples": [
                    676.65
                  ]
                },
                "z": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/z",
                  "type": "integer",
                  "title": "The Z Schema",
                  "default": 0,
                  "examples": [
                    1
                  ]
                },
                "rotation": {
                  "$id": "#/properties/rectangles/items/properties/content/items/properties/rotation",
                  "type": "number",
                  "title": "The Rotation Schema",
                  "default": 0.0,
                  "examples": [
                    45.2
                  ]
                }
              }
            }
          }
        }
      }
    },
    "ellipses": {
      "$id": "#/properties/ellipses",
      "type": "array",
      "title": "The Ellipses Schema",
      "items": {
        "$id": "#/properties/ellipses/items",
        "type": "object",
        "title": "The Items Schema",
        "required": [
          "id",
          "bookId",
          "page",
          "content"
        ],
        "properties": {
          "id": {
            "$id": "#/properties/ellipses/items/properties/id",
            "type": "string",
            "title": "The Id Schema",
            "default": "",
            "examples": [
              "dafead5b-b6cd-41e7-a1e3-fcfff6d63387"
            ],
            "pattern": "^(.*)$"
          },
          "bookId": {
            "$id": "#/properties/ellipses/items/properties/bookId",
            "type": "integer",
            "title": "The Bookid Schema",
            "default": 0,
            "examples": [
              245
            ]
          },
          "page": {
            "$id": "#/properties/ellipses/items/properties/page",
            "type": "integer",
            "title": "The Page Schema",
            "default": 0,
            "examples": [
              4
            ]
          },
          "content": {
            "$id": "#/properties/ellipses/items/properties/content",
            "type": "array",
            "title": "The Content Schema",
            "items": {
              "$id": "#/properties/ellipses/items/properties/content/items",
              "type": "object",
              "title": "The Items Schema",
              "required": [
                "id",
                "borderColor",
                "borderWidth",
                "color",
                "width",
                "height",
                "x",
                "y",
                "z",
                "rotation"
              ],
              "properties": {
                "id": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/id",
                  "type": "string",
                  "title": "The Id Schema",
                  "default": "",
                  "examples": [
                    "dafead5b-b6cd-41e7-a1e3-fcfff6d63386"
                  ],
                  "pattern": "^(.*)$"
                },
                "borderColor": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/borderColor",
                  "type": "string",
                  "title": "The Bordercolor Schema",
                  "default": "",
                  "examples": [
                    "#ffffff00"
                  ],
                  "pattern": "^(.*)$"
                },
                "borderWidth": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/borderWidth",
                  "type": "number",
                  "title": "The Borderwidth Schema",
                  "default": 0.0,
                  "examples": [
                    3.56
                  ]
                },
                "color": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/color",
                  "type": "string",
                  "title": "The Color Schema",
                  "default": "",
                  "examples": [
                    "#ffffff00"
                  ],
                  "pattern": "^(.*)$"
                },
                "width": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/width",
                  "type": "number",
                  "title": "The Width Schema",
                  "default": 0.0,
                  "examples": [
                    67.34
                  ]
                },
                "height": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/height",
                  "type": "number",
                  "title": "The Height Schema",
                  "default": 0.0,
                  "examples": [
                    87.12
                  ]
                },
                "x": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/x",
                  "type": "number",
                  "title": "The X Schema",
                  "default": 0.0,
                  "examples": [
                    245.12
                  ]
                },
                "y": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/y",
                  "type": "number",
                  "title": "The Y Schema",
                  "default": 0.0,
                  "examples": [
                    676.43
                  ]
                },
                "z": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/z",
                  "type": "integer",
                  "title": "The Z Schema",
                  "default": 0,
                  "examples": [
                    1
                  ]
                },
                "rotation": {
                  "$id": "#/properties/ellipses/items/properties/content/items/properties/rotation",
                  "type": "number",
                  "title": "The Rotation Schema",
                  "default": 0.0,
                  "examples": [
                    -34.5
                  ]
                }
              }
            }
          }
        }
      }
    },
    "circles": {
      "$id": "#/properties/circles",
      "type": "array",
      "title": "The Circles Schema",
      "items": {
        "$id": "#/properties/circles/items",
        "type": "object",
        "title": "The Items Schema",
        "required": [
          "id",
          "bookId",
          "page",
          "content"
        ],
        "properties": {
          "id": {
            "$id": "#/properties/circles/items/properties/id",
            "type": "string",
            "title": "The Id Schema",
            "default": "",
            "examples": [
              "dafead5b-b6cd-41e7-a1e3-fcfff6d63388"
            ],
            "pattern": "^(.*)$"
          },
          "bookId": {
            "$id": "#/properties/circles/items/properties/bookId",
            "type": "integer",
            "title": "The Bookid Schema",
            "default": 0,
            "examples": [
              245
            ]
          },
          "page": {
            "$id": "#/properties/circles/items/properties/page",
            "type": "integer",
            "title": "The Page Schema",
            "default": 0,
            "examples": [
              4
            ]
          },
          "content": {
            "$id": "#/properties/circles/items/properties/content",
            "type": "array",
            "title": "The Content Schema",
            "items": {
              "$id": "#/properties/circles/items/properties/content/items",
              "type": "object",
              "title": "The Items Schema",
              "required": [
                "id",
                "borderColor",
                "borderWidth",
                "color",
                "diameter",
                "x",
                "y",
                "z",
                "rotation"
              ],
              "properties": {
                "id": {
                  "$id": "#/properties/circles/items/properties/content/items/properties/id",
                  "type": "string",
                  "title": "The Id Schema",
                  "default": "",
                  "examples": [
                    "dafead5b-b6cd-41e7-a1e3-fcfff6d63386"
                  ],
                  "pattern": "^(.*)$"
                },
                "borderColor": {
                  "$id": "#/properties/circles/items/properties/content/items/properties/borderColor",
                  "type": "string",
                  "title": "The Bordercolor Schema",
                  "default": "",
                  "examples": [
                    "#ffffff00"
                  ],
                  "pattern": "^(.*)$"
                },
                "borderWidth": {
                  "$id": "#/properties/circles/items/properties/content/items/properties/borderWidth",
                  "type": "number",
                  "title": "The Borderwidth Schema",
                  "default": 0.0,
                  "examples": [
                    3.56
                  ]
                },
                "color": {
                  "$id": "#/properties/circles/items/properties/content/items/properties/color",
                  "type": "string",
                  "title": "The Color Schema",
                  "default": "",
                  "examples": [
                    "#ffffff00"
                  ],
                  "pattern": "^(.*)$"
                },
                "diameter": {
                  "$id": "#/properties/circles/items/properties/content/items/properties/diameter",
                  "type": "number",
                  "title": "The Diameter Schema",
                  "default": 0.0,
                  "examples": [
                    45.25
                  ]
                },
                "x": {
                  "$id": "#/properties/circles/items/properties/content/items/properties/x",
                  "type": "number",
                  "title": "The X Schema",
                  "default": 0.0,
                  "examples": [
                    245.12
                  ]
                },
                "y": {
                  "$id": "#/properties/circles/items/properties/content/items/properties/y",
                  "type": "number",
                  "title": "The Y Schema",
                  "default": 0.0,
                  "examples": [
                    676.33
                  ]
                },
                "z": {
                  "$id": "#/properties/circles/items/properties/content/items/properties/z",
                  "type": "integer",
                  "title": "The Z Schema",
                  "default": 0,
                  "examples": [
                    1
                  ]
                },
                "rotation": {
                  "$id": "#/properties/circles/items/properties/content/items/properties/rotation",
                  "type": "number",
                  "title": "The Rotation Schema",
                  "default": 0.0,
                  "examples": [
                    44.235
                  ]
                }
              }
            }
          }
        }
      }
    },
    "lines": {
      "$id": "#/properties/lines",
      "type": "array",
      "title": "The Lines Schema",
      "items": {
        "$id": "#/properties/lines/items",
        "type": "object",
        "title": "The Items Schema",
        "required": [
          "id",
          "bookId",
          "page",
          "content"
        ],
        "properties": {
          "id": {
            "$id": "#/properties/lines/items/properties/id",
            "type": "string",
            "title": "The Id Schema",
            "default": "",
            "examples": [
              "dafead5b-b6cd-41e7-a1e3-fcfff6d63389"
            ],
            "pattern": "^(.*)$"
          },
          "bookId": {
            "$id": "#/properties/lines/items/properties/bookId",
            "type": "integer",
            "title": "The Bookid Schema",
            "default": 0,
            "examples": [
              245
            ]
          },
          "page": {
            "$id": "#/properties/lines/items/properties/page",
            "type": "integer",
            "title": "The Page Schema",
            "default": 0,
            "examples": [
              4
            ]
          },
          "content": {
            "$id": "#/properties/lines/items/properties/content",
            "type": "array",
            "title": "The Content Schema",
            "items": {
              "$id": "#/properties/lines/items/properties/content/items",
              "type": "object",
              "title": "The Items Schema",
              "required": [
                "id",
                "borderColor",
                "borderWidth",
                "startX",
                "startY",
                "startZ",
                "endX",
                "endY",
                "endZ",
                "rotation"
              ],
              "properties": {
                "id": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/id",
                  "type": "string",
                  "title": "The Id Schema",
                  "default": "",
                  "examples": [
                    "dafead5b-b6cd-41e7-a1e3-fcfff6d63386"
                  ],
                  "pattern": "^(.*)$"
                },
                "borderColor": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/borderColor",
                  "type": "string",
                  "title": "The Bordercolor Schema",
                  "default": "",
                  "examples": [
                    "#ffffff00"
                  ],
                  "pattern": "^(.*)$"
                },
                "borderWidth": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/borderWidth",
                  "type": "number",
                  "title": "The Borderwidth Schema",
                  "default": 0.0,
                  "examples": [
                    3.56
                  ]
                },
                "startX": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/startX",
                  "type": "number",
                  "title": "The Startx Schema",
                  "default": 0.0,
                  "examples": [
                    245.56
                  ]
                },
                "startY": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/startY",
                  "type": "number",
                  "title": "The Starty Schema",
                  "default": 0.0,
                  "examples": [
                    676.12
                  ]
                },
                "startZ": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/startZ",
                  "type": "integer",
                  "title": "The Startz Schema",
                  "default": 0,
                  "examples": [
                    2
                  ]
                },
                "endX": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/endX",
                  "type": "number",
                  "title": "The Endx Schema",
                  "default": 0.0,
                  "examples": [
                    245.45
                  ]
                },
                "endY": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/endY",
                  "type": "number",
                  "title": "The Endy Schema",
                  "default": 0.0,
                  "examples": [
                    676.12
                  ]
                },
                "endZ": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/endZ",
                  "type": "integer",
                  "title": "The Endz Schema",
                  "default": 0,
                  "examples": [
                    2
                  ]
                },
                "rotation": {
                  "$id": "#/properties/lines/items/properties/content/items/properties/rotation",
                  "type": "number",
                  "title": "The Rotation Schema",
                  "default": 0.0,
                  "examples": [
                    -12.5678
                  ]
                }
              }
            }
          }
        }
      }
    }
  }
}
JSON;
