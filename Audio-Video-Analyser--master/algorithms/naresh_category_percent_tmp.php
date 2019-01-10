<?

    require_once "/home/trendsep/public_html/sih2018/algorithms/source_json_seperator.php";
    require_once "/home/trendsep/public_html/sih2018/algorithms/trancript.php";

    $json='{
  "accountId": "a76ef345-7cef-4367-9599-5c0eca019523",
  "id": "7e62e437c8",
  "partition": null,
  "name": "a",
  "description": null,
  "userName": "muhamed salih",
  "createTime": "2018-03-24T17:53:38.2181601+00:00",
  "organization": "",
  "privacyMode": "Public",
  "state": "Processed",
  "isOwned": true,
  "isEditable": false,
  "isBase": true,
  "durationInSeconds": 193,
  "summarizedInsights": {
    "name": "a",
    "shortId": "7e62e437c8",
    "privacyMode": 2,
    "duration": {
      "time": "00:03:13",
      "seconds": 193.0
    },
    "thumbnailUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/97e45e5a-6b5b-4566-ab45-5ad7697eb0a5",
    "faces": [{
      "id": 1002,
      "shortId": "7e62e437c8",
      "bingId": null,
      "confidence": 0.0,
      "name": "Unknown #10",
      "description": null,
      "title": null,
      "thumbnailId": "dc5df15e-65a1-427d-b5af-44f50e81b562",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/dc5df15e-65a1-427d-b5af-44f50e81b562",
      "appearances": [{
        "startTime": "00:00:16.9660000",
        "endTime": "00:00:20.5660000",
        "startSeconds": 17.0,
        "endSeconds": 20.6
      }],
      "seenDuration": 3.6000000000000014,
      "seenDurationRatio": 0.018652849740932651
    }, {
      "id": 1043,
      "shortId": "7e62e437c8",
      "bingId": null,
      "confidence": 0.0,
      "name": "Unknown #11",
      "description": null,
      "title": null,
      "thumbnailId": "4b905e4d-b17a-4e53-86de-e0f4716c8037",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/4b905e4d-b17a-4e53-86de-e0f4716c8037",
      "appearances": [{
        "startTime": "00:00:20.5660000",
        "endTime": "00:00:24.2330000",
        "startSeconds": 20.6,
        "endSeconds": 24.2
      }],
      "seenDuration": 3.5999999999999979,
      "seenDurationRatio": 0.01865284974093263
    }, {
      "id": 1193,
      "shortId": "7e62e437c8",
      "bingId": null,
      "confidence": 0.0,
      "name": "Unknown #3",
      "description": null,
      "title": null,
      "thumbnailId": "5d471aae-65af-48db-87a4-4842df2aedbb",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/5d471aae-65af-48db-87a4-4842df2aedbb",
      "appearances": [{
        "startTime": "00:01:42.0660000",
        "endTime": "00:01:44.5660000",
        "startSeconds": 102.1,
        "endSeconds": 104.6
      }],
      "seenDuration": 2.5,
      "seenDurationRatio": 0.012953367875647668
    }, {
      "id": 1021,
      "shortId": "7e62e437c8",
      "bingId": null,
      "confidence": 0.0,
      "name": "Unknown #1",
      "description": null,
      "title": null,
      "thumbnailId": "be211cca-b07c-4e78-8449-012ef94825b8",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/be211cca-b07c-4e78-8449-012ef94825b8",
      "appearances": [{
        "startTime": "00:00:20.5660000",
        "endTime": "00:00:22.9660000",
        "startSeconds": 20.6,
        "endSeconds": 23.0
      }],
      "seenDuration": 2.3999999999999986,
      "seenDurationRatio": 0.012435233160621754
    }, {
      "id": 1255,
      "shortId": "7e62e437c8",
      "bingId": null,
      "confidence": 0.0,
      "name": "Unknown #7",
      "description": null,
      "title": null,
      "thumbnailId": "9b409a39-490b-49cd-8ec3-55c0b0f40783",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/9b409a39-490b-49cd-8ec3-55c0b0f40783",
      "appearances": [{
        "startTime": "00:02:09.0660000",
        "endTime": "00:02:11.2330000",
        "startSeconds": 129.1,
        "endSeconds": 131.2
      }],
      "seenDuration": 2.0999999999999943,
      "seenDurationRatio": 0.010880829015544012
    }, {
      "id": 1158,
      "shortId": "7e62e437c8",
      "bingId": null,
      "confidence": 0.0,
      "name": "Unknown #5",
      "description": null,
      "title": null,
      "thumbnailId": "142c4b93-0af3-4317-90f1-4f2912ff0082",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/142c4b93-0af3-4317-90f1-4f2912ff0082",
      "appearances": [{
        "startTime": "00:01:15.0660000",
        "endTime": "00:01:16.5660000",
        "startSeconds": 75.1,
        "endSeconds": 76.6
      }],
      "seenDuration": 1.5,
      "seenDurationRatio": 0.0077720207253886009
    }, {
      "id": 1135,
      "shortId": "7e62e437c8",
      "bingId": "8d3a8329-b909-033e-c149-4ad040a8e879",
      "confidence": 0.992412269115448,
      "name": "Víctor Valdés",
      "description": "Víctor Valdés Arribas is a retired Spanish professional footballer who played as a goalkeeper. He spent most of his professional career with Barcelona in La Liga, and is regarded as one of the best goalkeepers in the clubs history, having appeared in 535 official games for the club and won 21 major titles, notably …",
      "title": "Spanish Professional Footballer",
      "thumbnailId": "c179b433-4e23-492d-b9a7-91197325c28e",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/c179b433-4e23-492d-b9a7-91197325c28e",
      "appearances": [{
        "startTime": "00:00:36.5660000",
        "endTime": "00:00:37.5660000",
        "startSeconds": 36.6,
        "endSeconds": 37.6
      }],
      "seenDuration": 1.0,
      "seenDurationRatio": 0.0051813471502590676
    }, {
      "id": 1119,
      "shortId": "7e62e437c8",
      "bingId": null,
      "confidence": 0.0,
      "name": "Unknown #8",
      "description": null,
      "title": null,
      "thumbnailId": "6353a817-843d-4943-8b2b-54c8943ecaf3",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/6353a817-843d-4943-8b2b-54c8943ecaf3",
      "appearances": [{
        "startTime": "00:00:36.5660000",
        "endTime": "00:00:37.5660000",
        "startSeconds": 36.6,
        "endSeconds": 37.6
      }],
      "seenDuration": 1.0,
      "seenDurationRatio": 0.0051813471502590676
    }, {
      "id": 1196,
      "shortId": "7e62e437c8",
      "bingId": null,
      "confidence": 0.0,
      "name": "Unknown #6",
      "description": null,
      "title": null,
      "thumbnailId": "8b406342-eca9-4980-993a-2a3314f066f0",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/8b406342-eca9-4980-993a-2a3314f066f0",
      "appearances": [{
        "startTime": "00:01:42.0660000",
        "endTime": "00:01:42.8660000",
        "startSeconds": 102.1,
        "endSeconds": 102.9
      }],
      "seenDuration": 0.80000000000001137,
      "seenDurationRatio": 0.0041450777202073127
    }, {
      "id": 1098,
      "shortId": "7e62e437c8",
      "bingId": null,
      "confidence": 0.0,
      "name": "Unknown #9",
      "description": null,
      "title": null,
      "thumbnailId": "d04a05c7-385b-4eca-be26-82fd212df7cf",
      "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/d04a05c7-385b-4eca-be26-82fd212df7cf",
      "appearances": [{
        "startTime": "00:00:35.5660000",
        "endTime": "00:00:36.0660000",
        "startSeconds": 35.6,
        "endSeconds": 36.1
      }],
      "seenDuration": 0.5,
      "seenDurationRatio": 0.0025906735751295338
    }],
    "topics": [{
      "name": "official tv",
      "appearances": [{
        "startTime": "00:00:12",
        "endTime": "00:00:22",
        "startSeconds": 12.0,
        "endSeconds": 22.0
      }, {
        "startTime": "00:03:04",
        "endTime": "00:03:08",
        "startSeconds": 184.0,
        "endSeconds": 188.0
      }],
      "isTranscript": false,
      "id": 0
    }, {
      "name": "fcbarcelona",
      "appearances": [{
        "startTime": "00:00:12",
        "endTime": "00:00:22",
        "startSeconds": 12.0,
        "endSeconds": 22.0
      }, {
        "startTime": "00:03:04",
        "endTime": "00:03:08",
        "startSeconds": 184.0,
        "endSeconds": 188.0
      }],
      "isTranscript": false,
      "id": 1
    }],
    "sentiments": [{
      "sentimentKey": "Neutral",
      "appearances": [{
        "startTime": "00:00:00",
        "endTime": "00:03:13",
        "startSeconds": 0.0,
        "endSeconds": 193.0
      }],
      "seenDurationRatio": 1.0
    }],
    "audioEffects": [{
      "audioEffectKey": "HandClaps",
      "appearances": [{
        "startTime": "00:00:46",
        "endTime": "00:00:48",
        "startSeconds": 46.0,
        "endSeconds": 48.0
      }, {
        "startTime": "00:01:08.5000000",
        "endTime": "00:01:10.5000000",
        "startSeconds": 68.5,
        "endSeconds": 70.5
      }, {
        "startTime": "00:01:48.5000000",
        "endTime": "00:02:10",
        "startSeconds": 108.5,
        "endSeconds": 130.0
      }, {
        "startTime": "00:02:32.5000000",
        "endTime": "00:02:34.5000000",
        "startSeconds": 152.5,
        "endSeconds": 154.5
      }],
      "seenDurationRatio": 0.14248704663212436,
      "seenDuration": 27.5
    }, {
      "audioEffectKey": "Silence",
      "appearances": [{
        "startTime": "00:03:04.5960000",
        "endTime": "00:03:13",
        "startSeconds": 184.6,
        "endSeconds": 193.0
      }],
      "seenDurationRatio": 0.043523316062176194,
      "seenDuration": 8.4000000000000057
    }],
    "annotations": [{
      "id": 7,
      "name": "grass",
      "appearances": [{
        "startTime": "00:00:14.9990000",
        "endTime": "00:00:21.4000000",
        "startSeconds": 15.0,
        "endSeconds": 21.4
      }, {
        "startTime": "00:00:25.6660000",
        "endTime": "00:00:42.7330000",
        "startSeconds": 25.7,
        "endSeconds": 42.7
      }, {
        "startTime": "00:00:48.0660000",
        "endTime": "00:00:49.1330000",
        "startSeconds": 48.1,
        "endSeconds": 49.1
      }, {
        "startTime": "00:00:52.3330000",
        "endTime": "00:01:37.1330000",
        "startSeconds": 52.3,
        "endSeconds": 97.1
      }, {
        "startTime": "00:01:49.9330000",
        "endTime": "00:02:09.1330000",
        "startSeconds": 109.9,
        "endSeconds": 129.1
      }, {
        "startTime": "00:02:12.3330000",
        "endTime": "00:02:15.5330000",
        "startSeconds": 132.3,
        "endSeconds": 135.5
      }, {
        "startTime": "00:02:18.7330000",
        "endTime": "00:02:39",
        "startSeconds": 138.7,
        "endSeconds": 159.0
      }, {
        "startTime": "00:02:44.3330000",
        "endTime": "00:02:53.9330000",
        "startSeconds": 164.3,
        "endSeconds": 173.9
      }]
    }, {
      "id": 11,
      "name": "athletic game",
      "appearances": [{
        "startTime": "00:00:16.0660000",
        "endTime": "00:00:44.8660000",
        "startSeconds": 16.1,
        "endSeconds": 44.9
      }, {
        "startTime": "00:00:48.0660000",
        "endTime": "00:00:50.2000000",
        "startSeconds": 48.1,
        "endSeconds": 50.2
      }, {
        "startTime": "00:00:54.4660000",
        "endTime": "00:00:55.5330000",
        "startSeconds": 54.5,
        "endSeconds": 55.5
      }, {
        "startTime": "00:00:59.7990000",
        "endTime": "00:01:00.8660000",
        "startSeconds": 59.8,
        "endSeconds": 60.9
      }, {
        "startTime": "00:01:06.1990000",
        "endTime": "00:01:20.0660000",
        "startSeconds": 66.2,
        "endSeconds": 80.1
      }, {
        "startTime": "00:01:29.6660000",
        "endTime": "00:01:36.0660000",
        "startSeconds": 89.7,
        "endSeconds": 96.1
      }, {
        "startTime": "00:01:46.7330000",
        "endTime": "00:02:07",
        "startSeconds": 106.7,
        "endSeconds": 127.0
      }, {
        "startTime": "00:02:10.1990000",
        "endTime": "00:02:28.3330000",
        "startSeconds": 130.2,
        "endSeconds": 148.3
      }, {
        "startTime": "00:02:31.5330000",
        "endTime": "00:02:40.0660000",
        "startSeconds": 151.5,
        "endSeconds": 160.1
      }, {
        "startTime": "00:02:44.3330000",
        "endTime": "00:02:53.9330000",
        "startSeconds": 164.3,
        "endSeconds": 173.9
      }]
    }, {
      "id": 10,
      "name": "sport",
      "appearances": [{
        "startTime": "00:00:16.0660000",
        "endTime": "00:00:43.8000000",
        "startSeconds": 16.1,
        "endSeconds": 43.8
      }, {
        "startTime": "00:00:48.0660000",
        "endTime": "00:00:50.2000000",
        "startSeconds": 48.1,
        "endSeconds": 50.2
      }, {
        "startTime": "00:00:54.4660000",
        "endTime": "00:00:55.5330000",
        "startSeconds": 54.5,
        "endSeconds": 55.5
      }, {
        "startTime": "00:00:59.7990000",
        "endTime": "00:01:00.8660000",
        "startSeconds": 59.8,
        "endSeconds": 60.9
      }, {
        "startTime": "00:01:06.1990000",
        "endTime": "00:01:20.0660000",
        "startSeconds": 66.2,
        "endSeconds": 80.1
      }, {
        "startTime": "00:01:29.6660000",
        "endTime": "00:01:31.8000000",
        "startSeconds": 89.7,
        "endSeconds": 91.8
      }, {
        "startTime": "00:01:34.9990000",
        "endTime": "00:01:36.0660000",
        "startSeconds": 95.0,
        "endSeconds": 96.1
      }, {
        "startTime": "00:01:42.4660000",
        "endTime": "00:01:44.6000000",
        "startSeconds": 102.5,
        "endSeconds": 104.6
      }, {
        "startTime": "00:01:48.8660000",
        "endTime": "00:02:28.3330000",
        "startSeconds": 108.9,
        "endSeconds": 148.3
      }, {
        "startTime": "00:02:31.5330000",
        "endTime": "00:02:40.0660000",
        "startSeconds": 151.5,
        "endSeconds": 160.1
      }, {
        "startTime": "00:02:45.3990000",
        "endTime": "00:02:53.9330000",
        "startSeconds": 165.4,
        "endSeconds": 173.9
      }]
    }, {
      "id": 8,
      "name": "person",
      "appearances": [{
        "startTime": "00:00:16.0660000",
        "endTime": "00:00:38.4660000",
        "startSeconds": 16.1,
        "endSeconds": 38.5
      }, {
        "startTime": "00:00:41.6660000",
        "endTime": "00:00:42.7330000",
        "startSeconds": 41.7,
        "endSeconds": 42.7
      }, {
        "startTime": "00:00:48.0660000",
        "endTime": "00:00:55.5330000",
        "startSeconds": 48.1,
        "endSeconds": 55.5
      }, {
        "startTime": "00:00:59.7990000",
        "endTime": "00:01:00.8660000",
        "startSeconds": 59.8,
        "endSeconds": 60.9
      }, {
        "startTime": "00:01:06.1990000",
        "endTime": "00:01:08.3330000",
        "startSeconds": 66.2,
        "endSeconds": 68.3
      }, {
        "startTime": "00:01:11.5330000",
        "endTime": "00:01:20.0660000",
        "startSeconds": 71.5,
        "endSeconds": 80.1
      }, {
        "startTime": "00:01:29.6660000",
        "endTime": "00:01:31.8000000",
        "startSeconds": 89.7,
        "endSeconds": 91.8
      }, {
        "startTime": "00:01:42.4660000",
        "endTime": "00:02:05.9330000",
        "startSeconds": 102.5,
        "endSeconds": 125.9
      }, {
        "startTime": "00:02:09.1330000",
        "endTime": "00:02:15.5330000",
        "startSeconds": 129.1,
        "endSeconds": 135.5
      }, {
        "startTime": "00:02:18.7330000",
        "endTime": "00:02:23",
        "startSeconds": 138.7,
        "endSeconds": 143.0
      }, {
        "startTime": "00:02:26.1990000",
        "endTime": "00:02:28.3330000",
        "startSeconds": 146.2,
        "endSeconds": 148.3
      }, {
        "startTime": "00:02:31.5330000",
        "endTime": "00:02:53.9330000",
        "startSeconds": 151.5,
        "endSeconds": 173.9
      }]
    }, {
      "id": 9,
      "name": "player",
      "appearances": [{
        "startTime": "00:00:16.0660000",
        "endTime": "00:00:22.4660000",
        "startSeconds": 16.1,
        "endSeconds": 22.5
      }, {
        "startTime": "00:00:25.6660000",
        "endTime": "00:00:43.8000000",
        "startSeconds": 25.7,
        "endSeconds": 43.8
      }, {
        "startTime": "00:00:48.0660000",
        "endTime": "00:00:50.2000000",
        "startSeconds": 48.1,
        "endSeconds": 50.2
      }, {
        "startTime": "00:00:54.4660000",
        "endTime": "00:01:00.8660000",
        "startSeconds": 54.5,
        "endSeconds": 60.9
      }, {
        "startTime": "00:01:06.1990000",
        "endTime": "00:01:20.0660000",
        "startSeconds": 66.2,
        "endSeconds": 80.1
      }, {
        "startTime": "00:01:29.6660000",
        "endTime": "00:01:35",
        "startSeconds": 89.7,
        "endSeconds": 95.0
      }, {
        "startTime": "00:01:48.8660000",
        "endTime": "00:02:07",
        "startSeconds": 108.9,
        "endSeconds": 127.0
      }, {
        "startTime": "00:02:12.3330000",
        "endTime": "00:02:15.5330000",
        "startSeconds": 132.3,
        "endSeconds": 135.5
      }, {
        "startTime": "00:02:18.7330000",
        "endTime": "00:02:28.3330000",
        "startSeconds": 138.7,
        "endSeconds": 148.3
      }, {
        "startTime": "00:02:31.5330000",
        "endTime": "00:02:40.0660000",
        "startSeconds": 151.5,
        "endSeconds": 160.1
      }, {
        "startTime": "00:02:44.3330000",
        "endTime": "00:02:53.9330000",
        "startSeconds": 164.3,
        "endSeconds": 173.9
      }]
    }, {
      "id": 6,
      "name": "building",
      "appearances": [{
        "startTime": "00:00:12.8660000",
        "endTime": "00:00:16.0660000",
        "startSeconds": 12.9,
        "endSeconds": 16.1
      }, {
        "startTime": "00:00:20.3330000",
        "endTime": "00:00:21.4000000",
        "startSeconds": 20.3,
        "endSeconds": 21.4
      }, {
        "startTime": "00:00:29.9330000",
        "endTime": "00:00:31",
        "startSeconds": 29.9,
        "endSeconds": 31.0
      }, {
        "startTime": "00:00:45.9330000",
        "endTime": "00:00:47",
        "startSeconds": 45.9,
        "endSeconds": 47.0
      }, {
        "startTime": "00:00:55.5330000",
        "endTime": "00:00:59.8000000",
        "startSeconds": 55.5,
        "endSeconds": 59.8
      }, {
        "startTime": "00:01:04.0660000",
        "endTime": "00:01:06.2000000",
        "startSeconds": 64.1,
        "endSeconds": 66.2
      }, {
        "startTime": "00:01:22.1990000",
        "endTime": "00:01:28.6000000",
        "startSeconds": 82.2,
        "endSeconds": 88.6
      }, {
        "startTime": "00:01:40.3330000",
        "endTime": "00:01:42.4660000",
        "startSeconds": 100.3,
        "endSeconds": 102.5
      }, {
        "startTime": "00:02:06.9990000",
        "endTime": "00:02:09.1330000",
        "startSeconds": 127.0,
        "endSeconds": 129.1
      }, {
        "startTime": "00:02:29.3990000",
        "endTime": "00:02:31.5330000",
        "startSeconds": 149.4,
        "endSeconds": 151.5
      }, {
        "startTime": "00:02:35.7990000",
        "endTime": "00:02:36.8660000",
        "startSeconds": 155.8,
        "endSeconds": 156.9
      }, {
        "startTime": "00:02:44.3330000",
        "endTime": "00:02:47.5330000",
        "startSeconds": 164.3,
        "endSeconds": 167.5
      }]
    }, {
      "id": 16,
      "name": "outdoor",
      "appearances": [{
        "startTime": "00:00:21.3990000",
        "endTime": "00:00:23.5330000",
        "startSeconds": 21.4,
        "endSeconds": 23.5
      }, {
        "startTime": "00:00:53.3990000",
        "endTime": "00:01:01.9330000",
        "startSeconds": 53.4,
        "endSeconds": 61.9
      }, {
        "startTime": "00:01:12.5990000",
        "endTime": "00:01:13.6660000",
        "startSeconds": 72.6,
        "endSeconds": 73.7
      }, {
        "startTime": "00:01:36.0660000",
        "endTime": "00:01:37.1330000",
        "startSeconds": 96.1,
        "endSeconds": 97.1
      }, {
        "startTime": "00:01:42.4660000",
        "endTime": "00:01:46.7330000",
        "startSeconds": 102.5,
        "endSeconds": 106.7
      }, {
        "startTime": "00:01:58.4660000",
        "endTime": "00:02:02.7330000",
        "startSeconds": 118.5,
        "endSeconds": 122.7
      }, {
        "startTime": "00:02:44.3330000",
        "endTime": "00:02:48.6000000",
        "startSeconds": 164.3,
        "endSeconds": 168.6
      }]
    }, {
      "id": 13,
      "name": "field",
      "appearances": [{
        "startTime": "00:00:19.2660000",
        "endTime": "00:00:21.4000000",
        "startSeconds": 19.3,
        "endSeconds": 21.4
      }, {
        "startTime": "00:00:25.6660000",
        "endTime": "00:00:31",
        "startSeconds": 25.7,
        "endSeconds": 31.0
      }, {
        "startTime": "00:00:52.3330000",
        "endTime": "00:00:54.4660000",
        "startSeconds": 52.3,
        "endSeconds": 54.5
      }, {
        "startTime": "00:01:06.1990000",
        "endTime": "00:01:07.2660000",
        "startSeconds": 66.2,
        "endSeconds": 67.3
      }, {
        "startTime": "00:01:29.6660000",
        "endTime": "00:01:31.8000000",
        "startSeconds": 89.7,
        "endSeconds": 91.8
      }, {
        "startTime": "00:01:59.5330000",
        "endTime": "00:02:00.6000000",
        "startSeconds": 119.5,
        "endSeconds": 120.6
      }, {
        "startTime": "00:02:26.1990000",
        "endTime": "00:02:28.3330000",
        "startSeconds": 146.2,
        "endSeconds": 148.3
      }]
    }, {
      "id": 12,
      "name": "soccer",
      "appearances": [{
        "startTime": "00:00:19.2660000",
        "endTime": "00:00:21.4000000",
        "startSeconds": 19.3,
        "endSeconds": 21.4
      }, {
        "startTime": "00:00:25.6660000",
        "endTime": "00:00:31",
        "startSeconds": 25.7,
        "endSeconds": 31.0
      }, {
        "startTime": "00:00:52.3330000",
        "endTime": "00:00:53.4000000",
        "startSeconds": 52.3,
        "endSeconds": 53.4
      }, {
        "startTime": "00:01:29.6660000",
        "endTime": "00:01:31.8000000",
        "startSeconds": 89.7,
        "endSeconds": 91.8
      }, {
        "startTime": "00:01:59.5330000",
        "endTime": "00:02:00.6000000",
        "startSeconds": 119.5,
        "endSeconds": 120.6
      }, {
        "startTime": "00:02:26.1990000",
        "endTime": "00:02:27.2660000",
        "startSeconds": 146.2,
        "endSeconds": 147.3
      }, {
        "startTime": "00:02:46.4660000",
        "endTime": "00:02:47.5330000",
        "startSeconds": 166.5,
        "endSeconds": 167.5
      }]
    }, {
      "id": 14,
      "name": "playing",
      "appearances": [{
        "startTime": "00:00:19.2660000",
        "endTime": "00:00:21.4000000",
        "startSeconds": 19.3,
        "endSeconds": 21.4
      }, {
        "startTime": "00:00:26.7330000",
        "endTime": "00:00:27.8000000",
        "startSeconds": 26.7,
        "endSeconds": 27.8
      }, {
        "startTime": "00:00:35.2660000",
        "endTime": "00:00:36.3330000",
        "startSeconds": 35.3,
        "endSeconds": 36.3
      }, {
        "startTime": "00:02:09.1330000",
        "endTime": "00:02:10.2000000",
        "startSeconds": 129.1,
        "endSeconds": 130.2
      }, {
        "startTime": "00:02:26.1990000",
        "endTime": "00:02:27.2660000",
        "startSeconds": 146.2,
        "endSeconds": 147.3
      }]
    }, {
      "id": 19,
      "name": "stadium",
      "appearances": [{
        "startTime": "00:01:25.3990000",
        "endTime": "00:01:28.6000000",
        "startSeconds": 85.4,
        "endSeconds": 88.6
      }]
    }, {
      "id": 2,
      "name": "laptop",
      "appearances": [{
        "startTime": "00:00:05.3990000",
        "endTime": "00:00:06.4660000",
        "startSeconds": 5.4,
        "endSeconds": 6.5
      }, {
        "startTime": "00:03:01.3990000",
        "endTime": "00:03:02.4660000",
        "startSeconds": 181.4,
        "endSeconds": 182.5
      }]
    }, {
      "id": 15,
      "name": "ball",
      "appearances": [{
        "startTime": "00:00:20.3330000",
        "endTime": "00:00:21.4000000",
        "startSeconds": 20.3,
        "endSeconds": 21.4
      }, {
        "startTime": "00:01:59.5330000",
        "endTime": "00:02:00.6000000",
        "startSeconds": 119.5,
        "endSeconds": 120.6
      }]
    }, {
      "id": 20,
      "name": "stationary",
      "appearances": [{
        "startTime": "00:02:58.1990000",
        "endTime": "00:03:00.3330000",
        "startSeconds": 178.2,
        "endSeconds": 180.3
      }]
    }, {
      "id": 21,
      "name": "writing implement",
      "appearances": [{
        "startTime": "00:02:58.1990000",
        "endTime": "00:03:00.3330000",
        "startSeconds": 178.2,
        "endSeconds": 180.3
      }]
    }, {
      "id": 17,
      "name": "boy",
      "appearances": [{
        "startTime": "00:00:36.3330000",
        "endTime": "00:00:37.4000000",
        "startSeconds": 36.3,
        "endSeconds": 37.4
      }]
    }, {
      "id": 18,
      "name": "green",
      "appearances": [{
        "startTime": "00:00:39.5330000",
        "endTime": "00:00:40.6000000",
        "startSeconds": 39.5,
        "endSeconds": 40.6
      }]
    }, {
      "id": 3,
      "name": "indoor",
      "appearances": [{
        "startTime": "00:00:05.3990000",
        "endTime": "00:00:06.4660000",
        "startSeconds": 5.4,
        "endSeconds": 6.5
      }]
    }, {
      "id": 5,
      "name": "laser",
      "appearances": [{
        "startTime": "00:00:07.5330000",
        "endTime": "00:00:08.6000000",
        "startSeconds": 7.5,
        "endSeconds": 8.6
      }]
    }, {
      "id": 22,
      "name": "computer",
      "appearances": [{
        "startTime": "00:03:01.3990000",
        "endTime": "00:03:02.4660000",
        "startSeconds": 181.4,
        "endSeconds": 182.5
      }]
    }, {
      "id": 4,
      "name": "red",
      "appearances": [{
        "startTime": "00:00:06.4660000",
        "endTime": "00:00:07.5330000",
        "startSeconds": 6.5,
        "endSeconds": 7.5
      }]
    }, {
      "id": 0,
      "name": "Black Frames",
      "appearances": [{
        "startTime": "00:00:00",
        "endTime": "00:00:00.2330000",
        "startSeconds": 0.0,
        "endSeconds": 0.2
      }, {
        "startTime": "00:00:28.1000000",
        "endTime": "00:00:28.5000000",
        "startSeconds": 28.1,
        "endSeconds": 28.5
      }, {
        "startTime": "00:02:43.0670000",
        "endTime": "00:02:43.5000000",
        "startSeconds": 163.1,
        "endSeconds": 163.5
      }, {
        "startTime": "00:03:06.3330000",
        "endTime": "00:03:07.7330000",
        "startSeconds": 186.3,
        "endSeconds": 187.7
      }, {
        "startTime": "00:03:12.3330000",
        "endTime": "00:03:13.4330000",
        "startSeconds": 192.3,
        "endSeconds": 193.4
      }]
    }],
    "brands": [{
      "id": 1,
      "name": "FC Barcelona",
      "wikiId": "FC_Barcelona",
      "wikiUrl": "http://en.wikipedia.org/wiki/FC_Barcelona",
      "confidence": 0.469,
      "description": "Futbol Club Barcelona, also known as Barcelona and familiarly as Barça, is a professional football club, based in Barcelona, Catalonia, Spain. Founded in 1899 by a group of Swiss, English and Catalan footballers led by Joan Gamper, the club has become a symbol of Catalan culture and Catalanism, hence the motto \"Més que un club\" (More than a club).",
      "appearances": [{
        "startTime": "00:00:10",
        "endTime": "00:00:12",
        "startSeconds": 10.0,
        "endSeconds": 12.0
      }, {
        "startTime": "00:00:12",
        "endTime": "00:00:22",
        "startSeconds": 12.0,
        "endSeconds": 22.0
      }, {
        "startTime": "00:03:04",
        "endTime": "00:03:08",
        "startSeconds": 184.0,
        "endSeconds": 188.0
      }],
      "seenDuration": 16.0
    }, {
      "id": 2,
      "name": "Panasonic",
      "wikiId": "Panasonic",
      "wikiUrl": "http://en.wikipedia.org/wiki/Panasonic",
      "confidence": -1.0,
      "description": "Panasonic Corporation, formerly known as Matsushita Electric Industrial Co., Ltd. , is a Japanese multinational electronics corporation headquartered in Kadoma, Osaka, Japan.",
      "appearances": [{
        "startTime": "00:01:14",
        "endTime": "00:01:18",
        "startSeconds": 74.0,
        "endSeconds": 78.0
      }, {
        "startTime": "00:02:16",
        "endTime": "00:02:18",
        "startSeconds": 136.0,
        "endSeconds": 138.0
      }, {
        "startTime": "00:03:08",
        "endTime": "00:03:13",
        "startSeconds": 188.0,
        "endSeconds": 193.0
      }],
      "seenDuration": 11.0
    }],
    "statistics": {
      "correspondenceCount": 0,
      "speakerTalkToListenRatio": {},
      "speakerLongestMonolog": {},
      "speakerNumberOfFragments": {},
      "speakerWordCount": {}
    }
  },
  "breakdowns": [{
    "accountId": "a76ef345-7cef-4367-9599-5c0eca019523",
    "id": "7e62e437c8",
    "state": "Processed",
    "processingProgress": "100%",
    "failureCode": "General",
    "failureMessage": "",
    "externalId": null,
    "externalUrl": null,
    "metadata": null,
    "insights": {
      "transcriptBlocks": [{
        "id": 0,
        "lines": [{
          "id": 0,
          "timeRange": {
            "start": "00:00:00",
            "end": "00:03:13"
          },
          "adjustedTimeRange": {
            "start": "00:00:00",
            "end": "00:03:13"
          },
          "participantId": -1,
          "text": "",
          "isIncluded": true,
          "confidence": 1.0
        }],
        "sentimentIds": [],
        "thumbnailsIds": [],
        "sentiment": 0.0,
        "faces": [{
          "id": 1135,
          "thumbnailId": "0535849b-7554-40d7-939e-272827cb9aeb",
          "ranges": [{
            "timeRange": {
              "start": "00:00:36.5660000",
              "end": "00:00:37.5660000"
            },
            "adjustedTimeRange": {
              "start": "00:00:36.5660000",
              "end": "00:00:37.5660000"
            }
          }]
        }, {
          "id": 1021,
          "thumbnailId": "d50c1582-a1af-4c73-b7fe-172238dc71de",
          "ranges": [{
            "timeRange": {
              "start": "00:00:20.5660000",
              "end": "00:00:22.9660000"
            },
            "adjustedTimeRange": {
              "start": "00:00:20.5660000",
              "end": "00:00:22.9660000"
            }
          }]
        }, {
          "id": 1193,
          "thumbnailId": "5d471aae-65af-48db-87a4-4842df2aedbb",
          "ranges": [{
            "timeRange": {
              "start": "00:01:42.0660000",
              "end": "00:01:44.5660000"
            },
            "adjustedTimeRange": {
              "start": "00:01:42.0660000",
              "end": "00:01:44.5660000"
            }
          }]
        }, {
          "id": 1158,
          "thumbnailId": "20b387cc-6d2d-46c2-bd91-8db0e31a29ca",
          "ranges": [{
            "timeRange": {
              "start": "00:01:15.0660000",
              "end": "00:01:16.5660000"
            },
            "adjustedTimeRange": {
              "start": "00:01:15.0660000",
              "end": "00:01:16.5660000"
            }
          }]
        }, {
          "id": 1196,
          "thumbnailId": "be8387c8-1a2b-4f02-9b61-4bd9c89a8953",
          "ranges": [{
            "timeRange": {
              "start": "00:01:42.0660000",
              "end": "00:01:42.8660000"
            },
            "adjustedTimeRange": {
              "start": "00:01:42.0660000",
              "end": "00:01:42.8660000"
            }
          }]
        }, {
          "id": 1255,
          "thumbnailId": "9b409a39-490b-49cd-8ec3-55c0b0f40783",
          "ranges": [{
            "timeRange": {
              "start": "00:02:09.0660000",
              "end": "00:02:11.2330000"
            },
            "adjustedTimeRange": {
              "start": "00:02:09.0660000",
              "end": "00:02:11.2330000"
            }
          }]
        }, {
          "id": 1119,
          "thumbnailId": "e96d60cc-35a5-4d9a-ba10-2a7c0f1551ab",
          "ranges": [{
            "timeRange": {
              "start": "00:00:36.5660000",
              "end": "00:00:37.5660000"
            },
            "adjustedTimeRange": {
              "start": "00:00:36.5660000",
              "end": "00:00:37.5660000"
            }
          }]
        }, {
          "id": 1098,
          "thumbnailId": "1252337c-633f-4a35-a56f-b43d42445458",
          "ranges": [{
            "timeRange": {
              "start": "00:00:35.5660000",
              "end": "00:00:36.0660000"
            },
            "adjustedTimeRange": {
              "start": "00:00:35.5660000",
              "end": "00:00:36.0660000"
            }
          }]
        }, {
          "id": 1002,
          "thumbnailId": "dc5df15e-65a1-427d-b5af-44f50e81b562",
          "ranges": [{
            "timeRange": {
              "start": "00:00:16.9660000",
              "end": "00:00:20.5660000"
            },
            "adjustedTimeRange": {
              "start": "00:00:16.9660000",
              "end": "00:00:20.5660000"
            }
          }]
        }, {
          "id": 1043,
          "thumbnailId": "4b905e4d-b17a-4e53-86de-e0f4716c8037",
          "ranges": [{
            "timeRange": {
              "start": "00:00:20.5660000",
              "end": "00:00:24.2330000"
            },
            "adjustedTimeRange": {
              "start": "00:00:20.5660000",
              "end": "00:00:24.2330000"
            }
          }]
        }],
        "ocrs": [{
          "timeRange": {
            "start": "00:00:10",
            "end": "00:00:12"
          },
          "adjustedTimeRange": {
            "start": "00:00:10",
            "end": "00:00:12"
          },
          "lines": [{
            "id": 0,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "FCB",
            "confidence": 0.358
          }]
        }, {
          "timeRange": {
            "start": "00:00:12",
            "end": "00:00:22"
          },
          "adjustedTimeRange": {
            "start": "00:00:12",
            "end": "00:00:22"
          },
          "lines": [{
            "id": 2,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "FCBARCELONA",
            "confidence": 0.396
          }, {
            "id": 3,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "OFFICIAL TV",
            "confidence": 0.52740000000000009
          }]
        }, {
          "timeRange": {
            "start": "00:01:14",
            "end": "00:01:18"
          },
          "adjustedTimeRange": {
            "start": "00:01:14",
            "end": "00:01:18"
          },
          "lines": [{
            "id": 14,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "AIRWAYS",
            "confidence": 0.39289285714285721
          }, {
            "id": 13,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "Panasonic",
            "confidence": 0.99799999999999989
          }]
        }, {
          "timeRange": {
            "start": "00:02:16",
            "end": "00:02:18"
          },
          "adjustedTimeRange": {
            "start": "00:02:16",
            "end": "00:02:18"
          },
          "lines": [{
            "id": 23,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "Panasonic",
            "confidence": 0.993
          }]
        }, {
          "timeRange": {
            "start": "00:03:04",
            "end": "00:03:08"
          },
          "adjustedTimeRange": {
            "start": "00:03:04",
            "end": "00:03:08"
          },
          "lines": [{
            "id": 32,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "FCB",
            "confidence": 0.35250000000000004
          }, {
            "id": 33,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "FCBARCELONA",
            "confidence": 0.35750000000000004
          }, {
            "id": 34,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "OFFICIAL TV",
            "confidence": 0.4707
          }]
        }, {
          "timeRange": {
            "start": "00:03:08",
            "end": "00:03:13.4670000"
          },
          "adjustedTimeRange": {
            "start": "00:03:08",
            "end": "00:03:13"
          },
          "lines": [{
            "id": 38,
            "width": 0,
            "height": 0,
            "language": "English",
            "textData": "Panasonic",
            "confidence": 0.832
          }]
        }],
        "audioEffectInstances": [{
          "type": 2,
          "ranges": [{
            "type": 2,
            "timeRange": {
              "start": "00:00:46",
              "end": "00:00:48"
            }
          }, {
            "type": 2,
            "timeRange": {
              "start": "00:01:08.5000000",
              "end": "00:01:10.5000000"
            }
          }, {
            "type": 2,
            "timeRange": {
              "start": "00:01:48.5000000",
              "end": "00:01:52.5000000"
            }
          }, {
            "type": 2,
            "timeRange": {
              "start": "00:01:56.5000000",
              "end": "00:01:58.5000000"
            }
          }, {
            "type": 2,
            "timeRange": {
              "start": "00:02:07.5000000",
              "end": "00:02:10"
            }
          }, {
            "type": 2,
            "timeRange": {
              "start": "00:02:32.5000000",
              "end": "00:02:34.5000000"
            }
          }]
        }, {
          "type": 5,
          "ranges": [{
            "type": 5,
            "timeRange": {
              "start": "00:03:04.5960000",
              "end": "00:03:13"
            }
          }]
        }, {
          "type": 4,
          "ranges": []
        }],
        "scenes": [{
          "id": 0,
          "timeRange": {
            "start": "00:00:00",
            "end": "00:00:01.5660000"
          },
          "keyFrame": "00:00:00.7330000",
          "keyFrameThumbnailId": "7ac7c00e-a53f-433b-bc59-84e0328aa164",
          "shots": [{
            "id": 0,
            "timeRange": {
              "start": "00:00:00",
              "end": "00:00:01.5660000"
            },
            "keyFrame": "00:00:00.7330000",
            "keyFrameThumbnailId": "f598a567-fcf3-4f0d-9500-27376f1a6d1c"
          }]
        }, {
          "id": 1,
          "timeRange": {
            "start": "00:00:01.7660000",
            "end": "00:00:06.9990000"
          },
          "keyFrame": "00:00:04.1670000",
          "keyFrameThumbnailId": "42da91dc-9750-4afa-9152-2b136b24f3db",
          "shots": [{
            "id": 1,
            "timeRange": {
              "start": "00:00:01.7660000",
              "end": "00:00:03.0990000"
            },
            "keyFrame": "00:00:02.3330000",
            "keyFrameThumbnailId": "c0cc32b3-f067-469a-8680-9dd31505fcfe"
          }, {
            "id": 2,
            "timeRange": {
              "start": "00:00:03.2990000",
              "end": "00:00:05.2990000"
            },
            "keyFrame": "00:00:04.1670000",
            "keyFrameThumbnailId": "c9169399-87b8-4129-9b91-e85db7f99311"
          }, {
            "id": 3,
            "timeRange": {
              "start": "00:00:05.2990000",
              "end": "00:00:06.9990000"
            },
            "keyFrame": "00:00:06.1330000",
            "keyFrameThumbnailId": "84440a4b-7e82-408d-956c-7c66919ea328"
          }]
        }, {
          "id": 2,
          "timeRange": {
            "start": "00:00:06.9990000",
            "end": "00:00:09.1330000"
          },
          "keyFrame": "00:00:08.0330000",
          "keyFrameThumbnailId": "54927a75-6409-4232-ad96-4e71ce6217ab",
          "shots": [{
            "id": 4,
            "timeRange": {
              "start": "00:00:06.9990000",
              "end": "00:00:09.1330000"
            },
            "keyFrame": "00:00:08.0330000",
            "keyFrameThumbnailId": "c37fa5c8-2068-4ee8-8daf-1e9b511dcd38"
          }]
        }, {
          "id": 3,
          "timeRange": {
            "start": "00:00:09.3330000",
            "end": "00:00:15.5660000"
          },
          "keyFrame": "00:00:12.6670000",
          "keyFrameThumbnailId": "bb76f2a6-1d97-4834-9b08-2d3405ad547a",
          "shots": [{
            "id": 5,
            "timeRange": {
              "start": "00:00:09.3330000",
              "end": "00:00:11.7990000"
            },
            "keyFrame": "00:00:09.7000000",
            "keyFrameThumbnailId": "a1ab27dc-03d2-46e0-854a-fa2caccc3d71"
          }, {
            "id": 6,
            "timeRange": {
              "start": "00:00:11.9990000",
              "end": "00:00:15.5660000"
            },
            "keyFrame": "00:00:12.6670000",
            "keyFrameThumbnailId": "6b12c99c-7515-4adf-a89e-6f56d3d95c66"
          }]
        }, {
          "id": 4,
          "timeRange": {
            "start": "00:00:15.5660000",
            "end": "00:00:38.5660000"
          },
          "keyFrame": "00:00:34.3330000",
          "keyFrameThumbnailId": "201d8ab3-c3cb-46f6-ba9b-48abcb141faf",
          "shots": [{
            "id": 7,
            "timeRange": {
              "start": "00:00:15.5660000",
              "end": "00:00:18.5660000"
            },
            "keyFrame": "00:00:15.7330000",
            "keyFrameThumbnailId": "895b498f-3d9d-4d8c-98d2-91ecfabfe6a5"
          }, {
            "id": 8,
            "timeRange": {
              "start": "00:00:18.5660000",
              "end": "00:00:20.5660000"
            },
            "keyFrame": "00:00:18.5330000",
            "keyFrameThumbnailId": "fe62c90c-ac79-4f09-a221-1b886aefd173"
          }, {
            "id": 9,
            "timeRange": {
              "start": "00:00:20.5660000",
              "end": "00:00:22.5660000"
            },
            "keyFrame": "00:00:20.5330000",
            "keyFrameThumbnailId": "33dce2e1-1a08-479a-a4c3-4afba8f6f046"
          }, {
            "id": 10,
            "timeRange": {
              "start": "00:00:22.5660000",
              "end": "00:00:25.5660000"
            },
            "keyFrame": "00:00:22.5330000",
            "keyFrameThumbnailId": "7c6d561e-47b8-44e9-b40c-fa625785a492"
          }, {
            "id": 11,
            "timeRange": {
              "start": "00:00:25.5660000",
              "end": "00:00:27.9660000"
            },
            "keyFrame": "00:00:25.7330000",
            "keyFrameThumbnailId": "c41b2650-c367-4ed4-ae2f-0d8f1b3fbddb"
          }, {
            "id": 12,
            "timeRange": {
              "start": "00:00:27.9660000",
              "end": "00:00:29.5660000"
            },
            "keyFrame": "00:00:28.7000000",
            "keyFrameThumbnailId": "0d32aa4a-7cf5-4680-8347-c6288ae08ba1"
          }, {
            "id": 13,
            "timeRange": {
              "start": "00:00:29.5660000",
              "end": "00:00:31.5660000"
            },
            "keyFrame": "00:00:30.4000000",
            "keyFrameThumbnailId": "298d5759-aa65-42df-a224-cbf1f66c3561"
          }, {
            "id": 14,
            "timeRange": {
              "start": "00:00:31.5660000",
              "end": "00:00:35.5660000"
            },
            "keyFrame": "00:00:34.3330000",
            "keyFrameThumbnailId": "ff656a44-0edd-4170-b16a-def23ae647ab"
          }, {
            "id": 15,
            "timeRange": {
              "start": "00:00:35.5660000",
              "end": "00:00:37.0660000"
            },
            "keyFrame": "00:00:36.5000000",
            "keyFrameThumbnailId": "cbb3451f-be22-4528-b6c5-131d1b939bc4"
          }, {
            "id": 16,
            "timeRange": {
              "start": "00:00:37.0660000",
              "end": "00:00:38.5660000"
            },
            "keyFrame": "00:00:37.7000000",
            "keyFrameThumbnailId": "b3aab9e9-d4f2-4b1f-8fee-ce39ce499ed5"
          }]
        }, {
          "id": 5,
          "timeRange": {
            "start": "00:00:38.5660000",
            "end": "00:00:40.0660000"
          },
          "keyFrame": "00:00:38.5330000",
          "keyFrameThumbnailId": "51f10253-4ed1-4d38-af2e-b8caa872664c",
          "shots": [{
            "id": 17,
            "timeRange": {
              "start": "00:00:38.5660000",
              "end": "00:00:40.0660000"
            },
            "keyFrame": "00:00:38.5330000",
            "keyFrameThumbnailId": "49b02863-9cf7-49c8-814e-d3dd4d19f45e"
          }]
        }, {
          "id": 6,
          "timeRange": {
            "start": "00:00:40.0660000",
            "end": "00:00:48.0660000"
          },
          "keyFrame": "00:00:42.8330000",
          "keyFrameThumbnailId": "a3347d49-0be1-4dc1-a3e6-2532638e3354",
          "shots": [{
            "id": 18,
            "timeRange": {
              "start": "00:00:40.0660000",
              "end": "00:00:44.0660000"
            },
            "keyFrame": "00:00:42.8330000",
            "keyFrameThumbnailId": "e6ae551c-dd9c-48df-ad96-37a9e43732c2"
          }, {
            "id": 19,
            "timeRange": {
              "start": "00:00:44.0660000",
              "end": "00:00:48.0660000"
            },
            "keyFrame": "00:00:45.9330000",
            "keyFrameThumbnailId": "e2d4e329-ab14-4fe3-b512-cfb626876cbb"
          }]
        }, {
          "id": 7,
          "timeRange": {
            "start": "00:00:48.0660000",
            "end": "00:00:52.0660000"
          },
          "keyFrame": "00:00:48.0330000",
          "keyFrameThumbnailId": "c3d6206a-3ca3-4539-ad56-1abb95d2176b",
          "shots": [{
            "id": 20,
            "timeRange": {
              "start": "00:00:48.0660000",
              "end": "00:00:50.0660000"
            },
            "keyFrame": "00:00:48.0330000",
            "keyFrameThumbnailId": "4159d2fb-cdb5-4671-a14a-119eef6cc4df"
          }, {
            "id": 21,
            "timeRange": {
              "start": "00:00:50.0660000",
              "end": "00:00:52.0660000"
            },
            "keyFrame": "00:00:50.0330000",
            "keyFrameThumbnailId": "40862909-a153-426b-a8d8-77af4e98a7ab"
          }]
        }, {
          "id": 8,
          "timeRange": {
            "start": "00:00:52.0660000",
            "end": "00:01:01.0660000"
          },
          "keyFrame": "00:00:55.5330000",
          "keyFrameThumbnailId": "f8a93cd6-c877-4ada-aca0-e8ea4691d139",
          "shots": [{
            "id": 22,
            "timeRange": {
              "start": "00:00:52.0660000",
              "end": "00:00:53.5660000"
            },
            "keyFrame": "00:00:52.8670000",
            "keyFrameThumbnailId": "d7f0f477-cf83-4aba-9063-84f2d4d87d5e"
          }, {
            "id": 23,
            "timeRange": {
              "start": "00:00:53.5660000",
              "end": "00:00:55.5660000"
            },
            "keyFrame": "00:00:54.5000000",
            "keyFrameThumbnailId": "01c9dc78-9281-411c-baaa-81b1686856d5"
          }, {
            "id": 24,
            "timeRange": {
              "start": "00:00:55.5660000",
              "end": "00:00:59.5660000"
            },
            "keyFrame": "00:00:55.5330000",
            "keyFrameThumbnailId": "9bcf8245-9f64-4fe4-be66-a7f1e2a2ef43"
          }, {
            "id": 25,
            "timeRange": {
              "start": "00:00:59.5660000",
              "end": "00:01:01.0660000"
            },
            "keyFrame": "00:00:59.7330000",
            "keyFrameThumbnailId": "30036388-363d-43c1-8cf5-4bf9fcdfe219"
          }]
        }, {
          "id": 9,
          "timeRange": {
            "start": "00:01:01.0660000",
            "end": "00:01:05.5660000"
          },
          "keyFrame": "00:01:01.0330000",
          "keyFrameThumbnailId": "a2b439b5-1845-41dd-a5de-e42914ba2d07",
          "shots": [{
            "id": 26,
            "timeRange": {
              "start": "00:01:01.0660000",
              "end": "00:01:05.5660000"
            },
            "keyFrame": "00:01:01.0330000",
            "keyFrameThumbnailId": "36dad83f-c15c-4d99-a855-bf8ce2841c4b"
          }]
        }, {
          "id": 10,
          "timeRange": {
            "start": "00:01:05.5660000",
            "end": "00:01:19.0660000"
          },
          "keyFrame": "00:01:11.5330000",
          "keyFrameThumbnailId": "cae6b2fb-5e1c-491c-9180-f36e7e3915f0",
          "shots": [{
            "id": 27,
            "timeRange": {
              "start": "00:01:05.5660000",
              "end": "00:01:08.0660000"
            },
            "keyFrame": "00:01:06.5000000",
            "keyFrameThumbnailId": "ddf3aec6-30a0-400b-9cd0-30b397a9660d"
          }, {
            "id": 28,
            "timeRange": {
              "start": "00:01:08.0660000",
              "end": "00:01:09.5660000"
            },
            "keyFrame": "00:01:08.7670000",
            "keyFrameThumbnailId": "e8d62145-3c9d-48f0-943e-eb826d2f4513"
          }, {
            "id": 29,
            "timeRange": {
              "start": "00:01:09.5660000",
              "end": "00:01:11.5660000"
            },
            "keyFrame": "00:01:10.3000000",
            "keyFrameThumbnailId": "74a4a245-8916-4218-a532-fa59dbf46339"
          }, {
            "id": 30,
            "timeRange": {
              "start": "00:01:11.5660000",
              "end": "00:01:15.0660000"
            },
            "keyFrame": "00:01:11.5330000",
            "keyFrameThumbnailId": "4947369d-bc15-4bad-8365-9260ec6c948e"
          }, {
            "id": 31,
            "timeRange": {
              "start": "00:01:15.0660000",
              "end": "00:01:16.5660000"
            },
            "keyFrame": "00:01:15.0330000",
            "keyFrameThumbnailId": "912fbaff-1776-4ebd-8ffa-39bcf397342b"
          }, {
            "id": 32,
            "timeRange": {
              "start": "00:01:16.5660000",
              "end": "00:01:19.0660000"
            },
            "keyFrame": "00:01:16.5330000",
            "keyFrameThumbnailId": "63c1d1a7-328c-4a8b-9c4a-e5fe47efa597"
          }]
        }, {
          "id": 11,
          "timeRange": {
            "start": "00:01:19.0660000",
            "end": "00:01:21.5660000"
          },
          "keyFrame": "00:01:20.2000000",
          "keyFrameThumbnailId": "2dde3bed-aeea-42de-8461-3a91a698a0f3",
          "shots": [{
            "id": 33,
            "timeRange": {
              "start": "00:01:19.0660000",
              "end": "00:01:21.5660000"
            },
            "keyFrame": "00:01:20.2000000",
            "keyFrameThumbnailId": "50297e5e-33a5-45bc-a01a-390bbcc6c12e"
          }]
        }, {
          "id": 12,
          "timeRange": {
            "start": "00:01:21.5660000",
            "end": "00:01:27.5660000"
          },
          "keyFrame": "00:01:24.4000000",
          "keyFrameThumbnailId": "eb0cb0b7-e1d7-4522-8104-b9354fa2fefc",
          "shots": [{
            "id": 34,
            "timeRange": {
              "start": "00:01:21.5660000",
              "end": "00:01:24.0660000"
            },
            "keyFrame": "00:01:21.7330000",
            "keyFrameThumbnailId": "a749e675-a6b3-431c-8bd2-c40cc59e9f81"
          }, {
            "id": 35,
            "timeRange": {
              "start": "00:01:24.0660000",
              "end": "00:01:27.5660000"
            },
            "keyFrame": "00:01:24.4000000",
            "keyFrameThumbnailId": "9bc33211-5f20-4b90-92a6-b6c9a2cbff21"
          }]
        }, {
          "id": 13,
          "timeRange": {
            "start": "00:01:27.5660000",
            "end": "00:01:29.5660000"
          },
          "keyFrame": "00:01:27.7330000",
          "keyFrameThumbnailId": "785a0c62-a412-4a3f-abbd-90b4b0375dfc",
          "shots": [{
            "id": 36,
            "timeRange": {
              "start": "00:01:27.5660000",
              "end": "00:01:29.5660000"
            },
            "keyFrame": "00:01:27.7330000",
            "keyFrameThumbnailId": "b96fd56f-2db4-4e7e-bee9-fb7e75f2c74e"
          }]
        }, {
          "id": 14,
          "timeRange": {
            "start": "00:01:29.5660000",
            "end": "00:01:31.0660000"
          },
          "keyFrame": "00:01:29.5330000",
          "keyFrameThumbnailId": "19eab4af-b0b2-457c-8713-2d9c127e0c83",
          "shots": [{
            "id": 37,
            "timeRange": {
              "start": "00:01:29.5660000",
              "end": "00:01:31.0660000"
            },
            "keyFrame": "00:01:29.5330000",
            "keyFrameThumbnailId": "cb5c1ac4-7216-4cae-8e08-b9211d62020b"
          }]
        }, {
          "id": 15,
          "timeRange": {
            "start": "00:01:31.0660000",
            "end": "00:01:42.0660000"
          },
          "keyFrame": "00:01:36",
          "keyFrameThumbnailId": "d7b4056c-b0f3-4642-828b-7731067fa63d",
          "shots": [{
            "id": 38,
            "timeRange": {
              "start": "00:01:31.0660000",
              "end": "00:01:33.0660000"
            },
            "keyFrame": "00:01:31.0330000",
            "keyFrameThumbnailId": "3b62b1c2-0d66-40d1-ab9c-646b06f1781e"
          }, {
            "id": 39,
            "timeRange": {
              "start": "00:01:33.0660000",
              "end": "00:01:38.5660000"
            },
            "keyFrame": "00:01:36",
            "keyFrameThumbnailId": "9d53a2ec-1f31-4427-a86b-ba685cc96bc1"
          }, {
            "id": 40,
            "timeRange": {
              "start": "00:01:38.5660000",
              "end": "00:01:42.0660000"
            },
            "keyFrame": "00:01:40.9330000",
            "keyFrameThumbnailId": "59fc543b-ae86-4f35-990d-c0b63f62b792"
          }]
        }, {
          "id": 16,
          "timeRange": {
            "start": "00:01:42.0660000",
            "end": "00:01:49.5660000"
          },
          "keyFrame": "00:01:45.7000000",
          "keyFrameThumbnailId": "bc770d35-d202-4ed7-9f31-f6db3a5b8a6c",
          "shots": [{
            "id": 41,
            "timeRange": {
              "start": "00:01:42.0660000",
              "end": "00:01:44.5660000"
            },
            "keyFrame": "00:01:43.6670000",
            "keyFrameThumbnailId": "952c44e4-7084-404c-b674-b1c2e9e377ed"
          }, {
            "id": 42,
            "timeRange": {
              "start": "00:01:44.5660000",
              "end": "00:01:47.5660000"
            },
            "keyFrame": "00:01:45.7000000",
            "keyFrameThumbnailId": "405c407c-8efa-4f11-8578-31b9d5cf3a55"
          }, {
            "id": 43,
            "timeRange": {
              "start": "00:01:47.5660000",
              "end": "00:01:49.5660000"
            },
            "keyFrame": "00:01:47.5330000",
            "keyFrameThumbnailId": "e8f05eca-3de6-47fa-9478-6b2d82e4e5b5"
          }]
        }, {
          "id": 17,
          "timeRange": {
            "start": "00:01:49.5660000",
            "end": "00:02:06.0660000"
          },
          "keyFrame": "00:01:57.9670000",
          "keyFrameThumbnailId": "2b4652de-e3eb-448a-88e9-7534bf4698ce",
          "shots": [{
            "id": 44,
            "timeRange": {
              "start": "00:01:49.5660000",
              "end": "00:01:52.5660000"
            },
            "keyFrame": "00:01:49.5330000",
            "keyFrameThumbnailId": "6a480dd9-4a40-4344-93c7-8cc4d3719795"
          }, {
            "id": 45,
            "timeRange": {
              "start": "00:01:52.5660000",
              "end": "00:01:54.5660000"
            },
            "keyFrame": "00:01:53.5000000",
            "keyFrameThumbnailId": "5194b431-c7e0-4490-a881-812f1f06aa6f"
          }, {
            "id": 46,
            "timeRange": {
              "start": "00:01:54.5660000",
              "end": "00:01:56.5660000"
            },
            "keyFrame": "00:01:55.7000000",
            "keyFrameThumbnailId": "b795cf37-7760-432d-ad29-feb53ec357c9"
          }, {
            "id": 47,
            "timeRange": {
              "start": "00:01:56.5660000",
              "end": "00:02:00.0660000"
            },
            "keyFrame": "00:01:57.9670000",
            "keyFrameThumbnailId": "ec96a24b-11a6-421b-8509-07fc7f2b8c1c"
          }, {
            "id": 48,
            "timeRange": {
              "start": "00:02:00.0660000",
              "end": "00:02:02.5660000"
            },
            "keyFrame": "00:02:02",
            "keyFrameThumbnailId": "b7eb816a-d5b8-47c4-bbd0-1bd3a5280602"
          }, {
            "id": 49,
            "timeRange": {
              "start": "00:02:02.5660000",
              "end": "00:02:06.0660000"
            },
            "keyFrame": "00:02:02.5330000",
            "keyFrameThumbnailId": "75e9cc29-5ef0-4844-9959-e56c19ecaaa1"
          }]
        }, {
          "id": 18,
          "timeRange": {
            "start": "00:02:06.0660000",
            "end": "00:02:09.0660000"
          },
          "keyFrame": "00:02:06.0330000",
          "keyFrameThumbnailId": "f418d6cd-1cdd-4752-a241-bb1fc34db8fe",
          "shots": [{
            "id": 50,
            "timeRange": {
              "start": "00:02:06.0660000",
              "end": "00:02:09.0660000"
            },
            "keyFrame": "00:02:06.0330000",
            "keyFrameThumbnailId": "a26c5b37-c697-4914-ae3f-b840cb614ecb"
          }]
        }, {
          "id": 19,
          "timeRange": {
            "start": "00:02:09.0660000",
            "end": "00:02:14.5660000"
          },
          "keyFrame": "00:02:09.0330000",
          "keyFrameThumbnailId": "5528c0b5-e578-4964-9dd5-d6ef44adab1d",
          "shots": [{
            "id": 51,
            "timeRange": {
              "start": "00:02:09.0660000",
              "end": "00:02:12.0660000"
            },
            "keyFrame": "00:02:09.0330000",
            "keyFrameThumbnailId": "4002c399-8517-4540-b635-c5b1d98c419d"
          }, {
            "id": 52,
            "timeRange": {
              "start": "00:02:12.0660000",
              "end": "00:02:14.5660000"
            },
            "keyFrame": "00:02:13.3000000",
            "keyFrameThumbnailId": "9800c59a-c4a1-4c7e-b3bd-06dc6e1f3b01"
          }]
        }, {
          "id": 20,
          "timeRange": {
            "start": "00:02:14.5660000",
            "end": "00:02:17.0660000"
          },
          "keyFrame": "00:02:14.7330000",
          "keyFrameThumbnailId": "6dfdb83b-d09f-45c2-aed8-3cbdac926cf9",
          "shots": [{
            "id": 53,
            "timeRange": {
              "start": "00:02:14.5660000",
              "end": "00:02:17.0660000"
            },
            "keyFrame": "00:02:14.7330000",
            "keyFrameThumbnailId": "57c0cc41-8ddd-47a7-95fd-b4d5229623ee"
          }]
        }, {
          "id": 21,
          "timeRange": {
            "start": "00:02:17.0660000",
            "end": "00:02:23.5660000"
          },
          "keyFrame": "00:02:18.5330000",
          "keyFrameThumbnailId": "73d84470-cece-44c6-89c9-0b51279cd4b3",
          "shots": [{
            "id": 54,
            "timeRange": {
              "start": "00:02:17.0660000",
              "end": "00:02:18.5660000"
            },
            "keyFrame": "00:02:17.0330000",
            "keyFrameThumbnailId": "c5cc8b46-879d-4887-84c9-63243dcf9f1d"
          }, {
            "id": 55,
            "timeRange": {
              "start": "00:02:18.5660000",
              "end": "00:02:22.0660000"
            },
            "keyFrame": "00:02:18.5330000",
            "keyFrameThumbnailId": "5bf02d56-aad8-4fa0-ac76-c5ca7ccd429e"
          }, {
            "id": 56,
            "timeRange": {
              "start": "00:02:22.0660000",
              "end": "00:02:23.5660000"
            },
            "keyFrame": "00:02:22.0330000",
            "keyFrameThumbnailId": "77eabae9-418f-418c-bcb9-f3f207cafcaa"
          }]
        }, {
          "id": 22,
          "timeRange": {
            "start": "00:02:23.5660000",
            "end": "00:02:31.0660000"
          },
          "keyFrame": "00:02:29.5670000",
          "keyFrameThumbnailId": "4dced1f4-f549-43b7-ae41-fcac61aa228b",
          "shots": [{
            "id": 57,
            "timeRange": {
              "start": "00:02:23.5660000",
              "end": "00:02:25.5660000"
            },
            "keyFrame": "00:02:23.7330000",
            "keyFrameThumbnailId": "0c6267fa-c6a3-430a-a5d0-8b508fdbfd7f"
          }, {
            "id": 58,
            "timeRange": {
              "start": "00:02:25.5660000",
              "end": "00:02:28.0660000"
            },
            "keyFrame": "00:02:25.7330000",
            "keyFrameThumbnailId": "d7167248-3188-4c69-acd6-3ec54fd5a458"
          }, {
            "id": 59,
            "timeRange": {
              "start": "00:02:28.0660000",
              "end": "00:02:31.0660000"
            },
            "keyFrame": "00:02:29.5670000",
            "keyFrameThumbnailId": "1705a80f-59b2-4481-bbff-0de5ca6dc5e0"
          }]
        }, {
          "id": 23,
          "timeRange": {
            "start": "00:02:31.0660000",
            "end": "00:02:40.0660000"
          },
          "keyFrame": "00:02:31.0330000",
          "keyFrameThumbnailId": "2fde3041-7e31-425e-98eb-bfd3b20387de",
          "shots": [{
            "id": 60,
            "timeRange": {
              "start": "00:02:31.0660000",
              "end": "00:02:35.0660000"
            },
            "keyFrame": "00:02:31.0330000",
            "keyFrameThumbnailId": "75d17c2b-c20e-47f7-96af-da6556a75351"
          }, {
            "id": 61,
            "timeRange": {
              "start": "00:02:35.0660000",
              "end": "00:02:37.0660000"
            },
            "keyFrame": "00:02:36.4000000",
            "keyFrameThumbnailId": "8dc7553a-e697-4729-b592-1839732ecbf5"
          }, {
            "id": 62,
            "timeRange": {
              "start": "00:02:37.0660000",
              "end": "00:02:40.0660000"
            },
            "keyFrame": "00:02:38.1670000",
            "keyFrameThumbnailId": "25827a9b-529f-49b5-9a80-71776766dee1"
          }]
        }, {
          "id": 24,
          "timeRange": {
            "start": "00:02:40.0660000",
            "end": "00:02:43.5660000"
          },
          "keyFrame": "00:02:42.9670000",
          "keyFrameThumbnailId": "443ef89d-209e-42b6-8668-ab78fe50f0fa",
          "shots": [{
            "id": 63,
            "timeRange": {
              "start": "00:02:40.0660000",
              "end": "00:02:43.5660000"
            },
            "keyFrame": "00:02:42.9670000",
            "keyFrameThumbnailId": "72c4c77a-393d-4b04-a850-a3c9c4b0d83e"
          }]
        }, {
          "id": 25,
          "timeRange": {
            "start": "00:02:43.5660000",
            "end": "00:02:54.1990000"
          },
          "keyFrame": "00:02:50.0330000",
          "keyFrameThumbnailId": "ded67709-57c9-43c8-8a45-3f6b52e5ba60",
          "shots": [{
            "id": 64,
            "timeRange": {
              "start": "00:02:43.5660000",
              "end": "00:02:45.2330000"
            },
            "keyFrame": "00:02:44.5330000",
            "keyFrameThumbnailId": "d77411ad-0ef4-4b2f-929e-02a55d629f79"
          }, {
            "id": 65,
            "timeRange": {
              "start": "00:02:45.2330000",
              "end": "00:02:46.8990000"
            },
            "keyFrame": "00:02:46",
            "keyFrameThumbnailId": "2b2cf461-1e92-499b-9176-36d171e545e9"
          }, {
            "id": 66,
            "timeRange": {
              "start": "00:02:46.8990000",
              "end": "00:02:47.9990000"
            },
            "keyFrame": "00:02:47.2000000",
            "keyFrameThumbnailId": "8a36973f-ffb7-4c70-84b1-368a73ab302a"
          }, {
            "id": 67,
            "timeRange": {
              "start": "00:02:47.9990000",
              "end": "00:02:49.0990000"
            },
            "keyFrame": "00:02:48.6670000",
            "keyFrameThumbnailId": "213567c5-9a1f-4600-b1a0-0b6a13b47f44"
          }, {
            "id": 68,
            "timeRange": {
              "start": "00:02:49.0990000",
              "end": "00:02:54.1990000"
            },
            "keyFrame": "00:02:50.0330000",
            "keyFrameThumbnailId": "695830c9-a42a-4130-ae80-e4fc33555688"
          }]
        }, {
          "id": 26,
          "timeRange": {
            "start": "00:02:54.3990000",
            "end": "00:02:58.1330000"
          },
          "keyFrame": "00:02:56.5330000",
          "keyFrameThumbnailId": "e711b35c-0ab0-4793-96ae-db2963067eb9",
          "shots": [{
            "id": 69,
            "timeRange": {
              "start": "00:02:54.3990000",
              "end": "00:02:55.6660000"
            },
            "keyFrame": "00:02:54.9670000",
            "keyFrameThumbnailId": "c113c562-8617-420d-ae81-64c51d309afe"
          }, {
            "id": 70,
            "timeRange": {
              "start": "00:02:55.6660000",
              "end": "00:02:58.1330000"
            },
            "keyFrame": "00:02:56.5330000",
            "keyFrameThumbnailId": "6f69e5ce-acbb-4271-be58-c18719905800"
          }]
        }, {
          "id": 27,
          "timeRange": {
            "start": "00:02:58.3330000",
            "end": "00:03:01.0660000"
          },
          "keyFrame": "00:02:59.6000000",
          "keyFrameThumbnailId": "f5787289-3058-474b-b1e3-8b5511ec79e6",
          "shots": [{
            "id": 71,
            "timeRange": {
              "start": "00:02:58.3330000",
              "end": "00:03:01.0660000"
            },
            "keyFrame": "00:02:59.6000000",
            "keyFrameThumbnailId": "ddc0f92b-14aa-4067-a897-86e811eb3ce9"
          }]
        }, {
          "id": 28,
          "timeRange": {
            "start": "00:03:01.2660000",
            "end": "00:03:13"
          },
          "keyFrame": "00:03:01.7330000",
          "keyFrameThumbnailId": "1f8f2554-002e-4b02-ac31-5240a1198f35",
          "shots": [{
            "id": 72,
            "timeRange": {
              "start": "00:03:01.2660000",
              "end": "00:03:13"
            },
            "keyFrame": "00:03:01.7330000",
            "keyFrameThumbnailId": "ebbf53ce-d7e0-490c-8925-18437d3a0dc3"
          }]
        }],
        "annotations": [{
          "id": 2,
          "name": "laptop",
          "timeRanges": [{
            "start": "00:00:05.3990000",
            "end": "00:00:06.4660000"
          }, {
            "start": "00:03:01.3990000",
            "end": "00:03:02.4660000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:05.3990000",
            "end": "00:00:06.4660000"
          }, {
            "start": "00:03:01.3990000",
            "end": "00:03:02.4660000"
          }]
        }, {
          "id": 3,
          "name": "indoor",
          "timeRanges": [{
            "start": "00:00:05.3990000",
            "end": "00:00:06.4660000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:05.3990000",
            "end": "00:00:06.4660000"
          }]
        }, {
          "id": 4,
          "name": "red",
          "timeRanges": [{
            "start": "00:00:06.4660000",
            "end": "00:00:07.5330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:06.4660000",
            "end": "00:00:07.5330000"
          }]
        }, {
          "id": 5,
          "name": "laser",
          "timeRanges": [{
            "start": "00:00:07.5330000",
            "end": "00:00:08.6000000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:07.5330000",
            "end": "00:00:08.6000000"
          }]
        }, {
          "id": 6,
          "name": "building",
          "timeRanges": [{
            "start": "00:00:12.8660000",
            "end": "00:00:16.0660000"
          }, {
            "start": "00:00:20.3330000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:29.9330000",
            "end": "00:00:31"
          }, {
            "start": "00:00:45.9330000",
            "end": "00:00:47"
          }, {
            "start": "00:00:55.5330000",
            "end": "00:00:59.8000000"
          }, {
            "start": "00:01:04.0660000",
            "end": "00:01:06.2000000"
          }, {
            "start": "00:01:22.1990000",
            "end": "00:01:24.3330000"
          }, {
            "start": "00:01:25.3990000",
            "end": "00:01:26.4660000"
          }, {
            "start": "00:01:27.5330000",
            "end": "00:01:28.6000000"
          }, {
            "start": "00:01:40.3330000",
            "end": "00:01:42.4660000"
          }, {
            "start": "00:02:06.9990000",
            "end": "00:02:09.1330000"
          }, {
            "start": "00:02:29.3990000",
            "end": "00:02:31.5330000"
          }, {
            "start": "00:02:35.7990000",
            "end": "00:02:36.8660000"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:45.4000000"
          }, {
            "start": "00:02:46.4660000",
            "end": "00:02:47.5330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:12.8660000",
            "end": "00:00:16.0660000"
          }, {
            "start": "00:00:20.3330000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:29.9330000",
            "end": "00:00:31"
          }, {
            "start": "00:00:45.9330000",
            "end": "00:00:47"
          }, {
            "start": "00:00:55.5330000",
            "end": "00:00:59.8000000"
          }, {
            "start": "00:01:04.0660000",
            "end": "00:01:06.2000000"
          }, {
            "start": "00:01:22.1990000",
            "end": "00:01:24.3330000"
          }, {
            "start": "00:01:25.3990000",
            "end": "00:01:26.4660000"
          }, {
            "start": "00:01:27.5330000",
            "end": "00:01:28.6000000"
          }, {
            "start": "00:01:40.3330000",
            "end": "00:01:42.4660000"
          }, {
            "start": "00:02:06.9990000",
            "end": "00:02:09.1330000"
          }, {
            "start": "00:02:29.3990000",
            "end": "00:02:31.5330000"
          }, {
            "start": "00:02:35.7990000",
            "end": "00:02:36.8660000"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:45.4000000"
          }, {
            "start": "00:02:46.4660000",
            "end": "00:02:47.5330000"
          }]
        }, {
          "id": 7,
          "name": "grass",
          "timeRanges": [{
            "start": "00:00:14.9990000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:00:38.4660000",
            "end": "00:00:39.5330000"
          }, {
            "start": "00:00:40.5990000",
            "end": "00:00:42.7330000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:49.1330000"
          }, {
            "start": "00:00:52.3330000",
            "end": "00:01:01.9330000"
          }, {
            "start": "00:01:04.0660000",
            "end": "00:01:15.8000000"
          }, {
            "start": "00:01:17.9330000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:22.1990000",
            "end": "00:01:26.4660000"
          }, {
            "start": "00:01:27.5330000",
            "end": "00:01:32.8660000"
          }, {
            "start": "00:01:33.9330000",
            "end": "00:01:37.1330000"
          }, {
            "start": "00:01:49.9330000",
            "end": "00:02:07"
          }, {
            "start": "00:02:08.0660000",
            "end": "00:02:09.1330000"
          }, {
            "start": "00:02:12.3330000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:18.7330000",
            "end": "00:02:25.1330000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:29.4000000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:32.6000000"
          }, {
            "start": "00:02:33.6660000",
            "end": "00:02:36.8660000"
          }, {
            "start": "00:02:37.9330000",
            "end": "00:02:39"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:48.6000000"
          }, {
            "start": "00:02:49.6660000",
            "end": "00:02:53.9330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:14.9990000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:00:38.4660000",
            "end": "00:00:39.5330000"
          }, {
            "start": "00:00:40.5990000",
            "end": "00:00:42.7330000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:49.1330000"
          }, {
            "start": "00:00:52.3330000",
            "end": "00:01:01.9330000"
          }, {
            "start": "00:01:04.0660000",
            "end": "00:01:15.8000000"
          }, {
            "start": "00:01:17.9330000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:22.1990000",
            "end": "00:01:26.4660000"
          }, {
            "start": "00:01:27.5330000",
            "end": "00:01:32.8660000"
          }, {
            "start": "00:01:33.9330000",
            "end": "00:01:37.1330000"
          }, {
            "start": "00:01:49.9330000",
            "end": "00:02:07"
          }, {
            "start": "00:02:08.0660000",
            "end": "00:02:09.1330000"
          }, {
            "start": "00:02:12.3330000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:18.7330000",
            "end": "00:02:25.1330000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:29.4000000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:32.6000000"
          }, {
            "start": "00:02:33.6660000",
            "end": "00:02:36.8660000"
          }, {
            "start": "00:02:37.9330000",
            "end": "00:02:39"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:48.6000000"
          }, {
            "start": "00:02:49.6660000",
            "end": "00:02:53.9330000"
          }]
        }, {
          "id": 8,
          "name": "person",
          "timeRanges": [{
            "start": "00:00:16.0660000",
            "end": "00:00:23.5330000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:29.9330000"
          }, {
            "start": "00:00:32.0660000",
            "end": "00:00:38.4660000"
          }, {
            "start": "00:00:41.6660000",
            "end": "00:00:42.7330000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:55.5330000"
          }, {
            "start": "00:00:59.7990000",
            "end": "00:01:00.8660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:08.3330000"
          }, {
            "start": "00:01:11.5330000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:42.4660000",
            "end": "00:01:44.6000000"
          }, {
            "start": "00:01:45.6660000",
            "end": "00:01:46.7330000"
          }, {
            "start": "00:01:47.7990000",
            "end": "00:01:54.2000000"
          }, {
            "start": "00:01:55.2660000",
            "end": "00:01:57.4000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:05.9330000"
          }, {
            "start": "00:02:09.1330000",
            "end": "00:02:12.3330000"
          }, {
            "start": "00:02:13.3990000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:18.7330000",
            "end": "00:02:23"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:41.1330000"
          }, {
            "start": "00:02:42.1990000",
            "end": "00:02:43.2660000"
          }, {
            "start": "00:02:45.3990000",
            "end": "00:02:46.4660000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:53.9330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:16.0660000",
            "end": "00:00:23.5330000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:29.9330000"
          }, {
            "start": "00:00:32.0660000",
            "end": "00:00:38.4660000"
          }, {
            "start": "00:00:41.6660000",
            "end": "00:00:42.7330000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:55.5330000"
          }, {
            "start": "00:00:59.7990000",
            "end": "00:01:00.8660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:08.3330000"
          }, {
            "start": "00:01:11.5330000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:42.4660000",
            "end": "00:01:44.6000000"
          }, {
            "start": "00:01:45.6660000",
            "end": "00:01:46.7330000"
          }, {
            "start": "00:01:47.7990000",
            "end": "00:01:54.2000000"
          }, {
            "start": "00:01:55.2660000",
            "end": "00:01:57.4000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:05.9330000"
          }, {
            "start": "00:02:09.1330000",
            "end": "00:02:12.3330000"
          }, {
            "start": "00:02:13.3990000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:18.7330000",
            "end": "00:02:23"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:41.1330000"
          }, {
            "start": "00:02:42.1990000",
            "end": "00:02:43.2660000"
          }, {
            "start": "00:02:45.3990000",
            "end": "00:02:46.4660000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:53.9330000"
          }]
        }, {
          "id": 9,
          "name": "player",
          "timeRanges": [{
            "start": "00:00:16.0660000",
            "end": "00:00:19.2660000"
          }, {
            "start": "00:00:20.3330000",
            "end": "00:00:22.4660000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:31"
          }, {
            "start": "00:00:32.0660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:00:38.4660000",
            "end": "00:00:39.5330000"
          }, {
            "start": "00:00:40.5990000",
            "end": "00:00:43.8000000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:50.2000000"
          }, {
            "start": "00:00:54.4660000",
            "end": "00:00:55.5330000"
          }, {
            "start": "00:00:56.5990000",
            "end": "00:01:00.8660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:08.3330000"
          }, {
            "start": "00:01:09.3990000",
            "end": "00:01:10.4660000"
          }, {
            "start": "00:01:11.5330000",
            "end": "00:01:15.8000000"
          }, {
            "start": "00:01:16.8660000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:33.9330000",
            "end": "00:01:35"
          }, {
            "start": "00:01:48.8660000",
            "end": "00:01:54.2000000"
          }, {
            "start": "00:01:55.2660000",
            "end": "00:01:57.4000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:02.7330000"
          }, {
            "start": "00:02:03.7990000",
            "end": "00:02:07"
          }, {
            "start": "00:02:12.3330000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:18.7330000",
            "end": "00:02:24.0660000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:40.0660000"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:46.4660000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:53.9330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:16.0660000",
            "end": "00:00:19.2660000"
          }, {
            "start": "00:00:20.3330000",
            "end": "00:00:22.4660000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:31"
          }, {
            "start": "00:00:32.0660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:00:38.4660000",
            "end": "00:00:39.5330000"
          }, {
            "start": "00:00:40.5990000",
            "end": "00:00:43.8000000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:50.2000000"
          }, {
            "start": "00:00:54.4660000",
            "end": "00:00:55.5330000"
          }, {
            "start": "00:00:56.5990000",
            "end": "00:01:00.8660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:08.3330000"
          }, {
            "start": "00:01:09.3990000",
            "end": "00:01:10.4660000"
          }, {
            "start": "00:01:11.5330000",
            "end": "00:01:15.8000000"
          }, {
            "start": "00:01:16.8660000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:33.9330000",
            "end": "00:01:35"
          }, {
            "start": "00:01:48.8660000",
            "end": "00:01:54.2000000"
          }, {
            "start": "00:01:55.2660000",
            "end": "00:01:57.4000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:02.7330000"
          }, {
            "start": "00:02:03.7990000",
            "end": "00:02:07"
          }, {
            "start": "00:02:12.3330000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:18.7330000",
            "end": "00:02:24.0660000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:40.0660000"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:46.4660000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:53.9330000"
          }]
        }, {
          "id": 10,
          "name": "sport",
          "timeRanges": [{
            "start": "00:00:16.0660000",
            "end": "00:00:19.2660000"
          }, {
            "start": "00:00:21.3990000",
            "end": "00:00:23.5330000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:29.9330000"
          }, {
            "start": "00:00:32.0660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:00:38.4660000",
            "end": "00:00:39.5330000"
          }, {
            "start": "00:00:40.5990000",
            "end": "00:00:43.8000000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:50.2000000"
          }, {
            "start": "00:00:54.4660000",
            "end": "00:00:55.5330000"
          }, {
            "start": "00:00:59.7990000",
            "end": "00:01:00.8660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:08.3330000"
          }, {
            "start": "00:01:09.3990000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:34.9990000",
            "end": "00:01:36.0660000"
          }, {
            "start": "00:01:42.4660000",
            "end": "00:01:44.6000000"
          }, {
            "start": "00:01:48.8660000",
            "end": "00:01:59.5330000"
          }, {
            "start": "00:02:00.5990000",
            "end": "00:02:07"
          }, {
            "start": "00:02:09.1330000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:17.6660000",
            "end": "00:02:24.0660000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:40.0660000"
          }, {
            "start": "00:02:45.3990000",
            "end": "00:02:46.4660000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:53.9330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:16.0660000",
            "end": "00:00:19.2660000"
          }, {
            "start": "00:00:21.3990000",
            "end": "00:00:23.5330000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:29.9330000"
          }, {
            "start": "00:00:32.0660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:00:38.4660000",
            "end": "00:00:39.5330000"
          }, {
            "start": "00:00:40.5990000",
            "end": "00:00:43.8000000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:50.2000000"
          }, {
            "start": "00:00:54.4660000",
            "end": "00:00:55.5330000"
          }, {
            "start": "00:00:59.7990000",
            "end": "00:01:00.8660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:08.3330000"
          }, {
            "start": "00:01:09.3990000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:34.9990000",
            "end": "00:01:36.0660000"
          }, {
            "start": "00:01:42.4660000",
            "end": "00:01:44.6000000"
          }, {
            "start": "00:01:48.8660000",
            "end": "00:01:59.5330000"
          }, {
            "start": "00:02:00.5990000",
            "end": "00:02:07"
          }, {
            "start": "00:02:09.1330000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:17.6660000",
            "end": "00:02:24.0660000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:40.0660000"
          }, {
            "start": "00:02:45.3990000",
            "end": "00:02:46.4660000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:53.9330000"
          }]
        }, {
          "id": 11,
          "name": "athletic game",
          "timeRanges": [{
            "start": "00:00:16.0660000",
            "end": "00:00:20.3330000"
          }, {
            "start": "00:00:21.3990000",
            "end": "00:00:23.5330000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:29.9330000"
          }, {
            "start": "00:00:32.0660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:00:38.4660000",
            "end": "00:00:39.5330000"
          }, {
            "start": "00:00:40.5990000",
            "end": "00:00:44.8660000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:50.2000000"
          }, {
            "start": "00:00:54.4660000",
            "end": "00:00:55.5330000"
          }, {
            "start": "00:00:59.7990000",
            "end": "00:01:00.8660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:15.8000000"
          }, {
            "start": "00:01:16.8660000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:33.9330000",
            "end": "00:01:36.0660000"
          }, {
            "start": "00:01:46.7330000",
            "end": "00:01:47.8000000"
          }, {
            "start": "00:01:49.9330000",
            "end": "00:01:59.5330000"
          }, {
            "start": "00:02:00.5990000",
            "end": "00:02:07"
          }, {
            "start": "00:02:10.1990000",
            "end": "00:02:11.2660000"
          }, {
            "start": "00:02:12.3330000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:17.6660000",
            "end": "00:02:24.0660000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:35.8000000"
          }, {
            "start": "00:02:37.9330000",
            "end": "00:02:40.0660000"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:46.4660000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:48.6000000"
          }, {
            "start": "00:02:49.6660000",
            "end": "00:02:50.7330000"
          }, {
            "start": "00:02:51.7990000",
            "end": "00:02:53.9330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:16.0660000",
            "end": "00:00:20.3330000"
          }, {
            "start": "00:00:21.3990000",
            "end": "00:00:23.5330000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:29.9330000"
          }, {
            "start": "00:00:32.0660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:00:38.4660000",
            "end": "00:00:39.5330000"
          }, {
            "start": "00:00:40.5990000",
            "end": "00:00:44.8660000"
          }, {
            "start": "00:00:48.0660000",
            "end": "00:00:50.2000000"
          }, {
            "start": "00:00:54.4660000",
            "end": "00:00:55.5330000"
          }, {
            "start": "00:00:59.7990000",
            "end": "00:01:00.8660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:15.8000000"
          }, {
            "start": "00:01:16.8660000",
            "end": "00:01:20.0660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:33.9330000",
            "end": "00:01:36.0660000"
          }, {
            "start": "00:01:46.7330000",
            "end": "00:01:47.8000000"
          }, {
            "start": "00:01:49.9330000",
            "end": "00:01:59.5330000"
          }, {
            "start": "00:02:00.5990000",
            "end": "00:02:07"
          }, {
            "start": "00:02:10.1990000",
            "end": "00:02:11.2660000"
          }, {
            "start": "00:02:12.3330000",
            "end": "00:02:15.5330000"
          }, {
            "start": "00:02:17.6660000",
            "end": "00:02:24.0660000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }, {
            "start": "00:02:31.5330000",
            "end": "00:02:35.8000000"
          }, {
            "start": "00:02:37.9330000",
            "end": "00:02:40.0660000"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:46.4660000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:48.6000000"
          }, {
            "start": "00:02:49.6660000",
            "end": "00:02:50.7330000"
          }, {
            "start": "00:02:51.7990000",
            "end": "00:02:53.9330000"
          }]
        }, {
          "id": 12,
          "name": "soccer",
          "timeRanges": [{
            "start": "00:00:19.2660000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:27.8000000"
          }, {
            "start": "00:00:29.9330000",
            "end": "00:00:31"
          }, {
            "start": "00:00:52.3330000",
            "end": "00:00:53.4000000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:00.6000000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:27.2660000"
          }, {
            "start": "00:02:46.4660000",
            "end": "00:02:47.5330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:19.2660000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:27.8000000"
          }, {
            "start": "00:00:29.9330000",
            "end": "00:00:31"
          }, {
            "start": "00:00:52.3330000",
            "end": "00:00:53.4000000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:00.6000000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:27.2660000"
          }, {
            "start": "00:02:46.4660000",
            "end": "00:02:47.5330000"
          }]
        }, {
          "id": 13,
          "name": "field",
          "timeRanges": [{
            "start": "00:00:19.2660000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:28.8660000"
          }, {
            "start": "00:00:29.9330000",
            "end": "00:00:31"
          }, {
            "start": "00:00:52.3330000",
            "end": "00:00:54.4660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:07.2660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:00.6000000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:19.2660000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:25.6660000",
            "end": "00:00:28.8660000"
          }, {
            "start": "00:00:29.9330000",
            "end": "00:00:31"
          }, {
            "start": "00:00:52.3330000",
            "end": "00:00:54.4660000"
          }, {
            "start": "00:01:06.1990000",
            "end": "00:01:07.2660000"
          }, {
            "start": "00:01:29.6660000",
            "end": "00:01:31.8000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:00.6000000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:28.3330000"
          }]
        }, {
          "id": 14,
          "name": "playing",
          "timeRanges": [{
            "start": "00:00:19.2660000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:26.7330000",
            "end": "00:00:27.8000000"
          }, {
            "start": "00:00:35.2660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:02:09.1330000",
            "end": "00:02:10.2000000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:27.2660000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:19.2660000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:00:26.7330000",
            "end": "00:00:27.8000000"
          }, {
            "start": "00:00:35.2660000",
            "end": "00:00:36.3330000"
          }, {
            "start": "00:02:09.1330000",
            "end": "00:02:10.2000000"
          }, {
            "start": "00:02:26.1990000",
            "end": "00:02:27.2660000"
          }]
        }, {
          "id": 15,
          "name": "ball",
          "timeRanges": [{
            "start": "00:00:20.3330000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:00.6000000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:20.3330000",
            "end": "00:00:21.4000000"
          }, {
            "start": "00:01:59.5330000",
            "end": "00:02:00.6000000"
          }]
        }, {
          "id": 16,
          "name": "outdoor",
          "timeRanges": [{
            "start": "00:00:21.3990000",
            "end": "00:00:23.5330000"
          }, {
            "start": "00:00:53.3990000",
            "end": "00:00:54.4660000"
          }, {
            "start": "00:00:55.5330000",
            "end": "00:00:57.6660000"
          }, {
            "start": "00:00:59.7990000",
            "end": "00:01:01.9330000"
          }, {
            "start": "00:01:12.5990000",
            "end": "00:01:13.6660000"
          }, {
            "start": "00:01:36.0660000",
            "end": "00:01:37.1330000"
          }, {
            "start": "00:01:42.4660000",
            "end": "00:01:44.6000000"
          }, {
            "start": "00:01:45.6660000",
            "end": "00:01:46.7330000"
          }, {
            "start": "00:01:58.4660000",
            "end": "00:01:59.5330000"
          }, {
            "start": "00:02:00.5990000",
            "end": "00:02:02.7330000"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:45.4000000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:48.6000000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:21.3990000",
            "end": "00:00:23.5330000"
          }, {
            "start": "00:00:53.3990000",
            "end": "00:00:54.4660000"
          }, {
            "start": "00:00:55.5330000",
            "end": "00:00:57.6660000"
          }, {
            "start": "00:00:59.7990000",
            "end": "00:01:01.9330000"
          }, {
            "start": "00:01:12.5990000",
            "end": "00:01:13.6660000"
          }, {
            "start": "00:01:36.0660000",
            "end": "00:01:37.1330000"
          }, {
            "start": "00:01:42.4660000",
            "end": "00:01:44.6000000"
          }, {
            "start": "00:01:45.6660000",
            "end": "00:01:46.7330000"
          }, {
            "start": "00:01:58.4660000",
            "end": "00:01:59.5330000"
          }, {
            "start": "00:02:00.5990000",
            "end": "00:02:02.7330000"
          }, {
            "start": "00:02:44.3330000",
            "end": "00:02:45.4000000"
          }, {
            "start": "00:02:47.5330000",
            "end": "00:02:48.6000000"
          }]
        }, {
          "id": 17,
          "name": "boy",
          "timeRanges": [{
            "start": "00:00:36.3330000",
            "end": "00:00:37.4000000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:36.3330000",
            "end": "00:00:37.4000000"
          }]
        }, {
          "id": 18,
          "name": "green",
          "timeRanges": [{
            "start": "00:00:39.5330000",
            "end": "00:00:40.6000000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:00:39.5330000",
            "end": "00:00:40.6000000"
          }]
        }, {
          "id": 19,
          "name": "stadium",
          "timeRanges": [{
            "start": "00:01:25.3990000",
            "end": "00:01:26.4660000"
          }, {
            "start": "00:01:27.5330000",
            "end": "00:01:28.6000000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:01:25.3990000",
            "end": "00:01:26.4660000"
          }, {
            "start": "00:01:27.5330000",
            "end": "00:01:28.6000000"
          }]
        }, {
          "id": 20,
          "name": "stationary",
          "timeRanges": [{
            "start": "00:02:58.1990000",
            "end": "00:03:00.3330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:02:58.1990000",
            "end": "00:03:00.3330000"
          }]
        }, {
          "id": 21,
          "name": "writing implement",
          "timeRanges": [{
            "start": "00:02:58.1990000",
            "end": "00:03:00.3330000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:02:58.1990000",
            "end": "00:03:00.3330000"
          }]
        }, {
          "id": 22,
          "name": "computer",
          "timeRanges": [{
            "start": "00:03:01.3990000",
            "end": "00:03:02.4660000"
          }],
          "adjustedTimeRanges": [{
            "start": "00:03:01.3990000",
            "end": "00:03:02.4660000"
          }]
        }]
      }],
      "topics": [{
        "id": 0,
        "name": "official tv",
        "stem": "official tv",
        "words": ["official tv"],
        "rank": 4.0
      }, {
        "id": 1,
        "name": "fcbarcelona",
        "stem": "fcbarcelona",
        "words": ["fcbarcelona"],
        "rank": 1.0
      }],
      "brands": [{
        "id": 1,
        "name": "FC Barcelona",
        "wikiId": "FC_Barcelona",
        "wikiUrl": "http://en.wikipedia.org/wiki/FC_Barcelona",
        "description": "Futbol Club Barcelona, also known as Barcelona and familiarly as Barça, is a professional football club, based in Barcelona, Catalonia, Spain. Founded in 1899 by a group of Swiss, English and Catalan footballers led by Joan Gamper, the club has become a symbol of Catalan culture and Catalanism, hence the motto \"Més que un club\" (More than a club).",
        "confidence": 0.469,
        "tags": [],
        "transcriptTimeRanges": [],
        "transcriptAdjustedTimeRanges": [],
        "ocrTimeRanges": [{
          "start": "00:00:10",
          "end": "00:00:12"
        }, {
          "start": "00:00:12",
          "end": "00:00:22"
        }, {
          "start": "00:03:04",
          "end": "00:03:08"
        }, {
          "start": "00:03:04",
          "end": "00:03:08"
        }],
        "ocrAdjustedTimeRanges": [{
          "start": "00:00:10",
          "end": "00:00:12"
        }, {
          "start": "00:00:12",
          "end": "00:00:22"
        }, {
          "start": "00:03:04",
          "end": "00:03:08"
        }, {
          "start": "00:03:04",
          "end": "00:03:08"
        }]
      }, {
        "id": 2,
        "name": "Panasonic",
        "wikiId": "Panasonic",
        "wikiUrl": "http://en.wikipedia.org/wiki/Panasonic",
        "description": "Panasonic Corporation, formerly known as Matsushita Electric Industrial Co., Ltd. , is a Japanese multinational electronics corporation headquartered in Kadoma, Osaka, Japan.",
        "confidence": -1.0,
        "tags": [],
        "transcriptTimeRanges": [],
        "transcriptAdjustedTimeRanges": [],
        "ocrTimeRanges": [{
          "start": "00:01:14",
          "end": "00:01:18"
        }, {
          "start": "00:02:16",
          "end": "00:02:18"
        }, {
          "start": "00:03:08",
          "end": "00:03:13.4670000"
        }],
        "ocrAdjustedTimeRanges": [{
          "start": "00:01:14",
          "end": "00:01:18"
        }, {
          "start": "00:02:16",
          "end": "00:02:18"
        }, {
          "start": "00:03:08",
          "end": "00:03:13"
        }]
      }],
      "faces": [{
        "id": 1135,
        "bingId": "8d3a8329-b909-033e-c149-4ad040a8e879",
        "name": "Víctor Valdés",
        "thumbnailId": "c179b433-4e23-492d-b9a7-91197325c28e",
        "description": "Víctor Valdés Arribas is a retired Spanish professional footballer who played as a goalkeeper. He spent most of his professional career with Barcelona in La Liga, and is regarded as one of the best goalkeepers in the clubs history, having appeared in 535 official games for the club and won 21 major titles, notably …",
        "title": "Spanish Professional Footballer",
        "imageUrl": "https://www.bing.com/th?id=A9410db5a490e419f6908506ab05f52eb&c=12&rs=1&qlt=80&cdv=1&pid=16.2",
        "confidence": 0.992412269115448,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1021,
        "bingId": null,
        "name": "Unknown #1",
        "thumbnailId": "be211cca-b07c-4e78-8449-012ef94825b8",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1193,
        "bingId": null,
        "name": "Unknown #3",
        "thumbnailId": "5d471aae-65af-48db-87a4-4842df2aedbb",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1276,
        "bingId": null,
        "name": "Unknown #4",
        "thumbnailId": "adac5257-02d6-4aa1-ad6b-f133fd49b6a5",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1158,
        "bingId": null,
        "name": "Unknown #5",
        "thumbnailId": "142c4b93-0af3-4317-90f1-4f2912ff0082",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1196,
        "bingId": null,
        "name": "Unknown #6",
        "thumbnailId": "8b406342-eca9-4980-993a-2a3314f066f0",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1255,
        "bingId": null,
        "name": "Unknown #7",
        "thumbnailId": "9b409a39-490b-49cd-8ec3-55c0b0f40783",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1119,
        "bingId": null,
        "name": "Unknown #8",
        "thumbnailId": "6353a817-843d-4943-8b2b-54c8943ecaf3",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1098,
        "bingId": null,
        "name": "Unknown #9",
        "thumbnailId": "d04a05c7-385b-4eca-be26-82fd212df7cf",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1002,
        "bingId": null,
        "name": "Unknown #10",
        "thumbnailId": "dc5df15e-65a1-427d-b5af-44f50e81b562",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }, {
        "id": 1043,
        "bingId": null,
        "name": "Unknown #11",
        "thumbnailId": "4b905e4d-b17a-4e53-86de-e0f4716c8037",
        "description": null,
        "title": null,
        "imageUrl": null,
        "confidence": 0.0,
        "knownPersonId": "00000000-0000-0000-0000-000000000000"
      }],
      "participants": [],
      "contentModeration": {
        "adultClassifierValue": 0.3294,
        "racyClassifierValue": 0.85265,
        "bannedWordsCount": 0,
        "bannedWordsRatio": 0.0,
        "reviewRecommended": false,
        "isAdult": false
      },
      "audioEffectsCategories": [{
        "type": 2,
        "key": "HandClaps"
      }, {
        "type": 5,
        "key": "Silence"
      }],
      "framePatterns": [{
        "patternType": "Black",
        "timeRanges": [{
          "start": "00:00:00",
          "end": "00:00:00.2330000"
        }, {
          "start": "00:00:28.1000000",
          "end": "00:00:28.5000000"
        }, {
          "start": "00:02:43.0670000",
          "end": "00:02:43.5000000"
        }, {
          "start": "00:03:06.3330000",
          "end": "00:03:07.7330000"
        }, {
          "start": "00:03:12.3330000",
          "end": "00:03:13.4330000"
        }]
      }]
    },
    "thumbnailUrl": "https://www.videoindexer.ai/api/Thumbnail/7e62e437c8/97e45e5a-6b5b-4566-ab45-5ad7697eb0a5",
    "publishedUrl": "https://rodmandev.streaming.mediaservices.windows.net:443/d88aff77-06ef-4516-b8cd-4b009e5de980/a.ism/manifest",
    "publishedProxyUrl": null,
    "viewToken": "Bearer=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1cm46bWljcm9zb2Z0OmF6dXJlOm1lZGlhc2VydmljZXM6Y29udGVudGtleWlkZW50aWZpZXIiOiJmMTJhNDRiMy02OTc0LTQzY2MtOWU0Yi1kYTQ3ZDA4Y2IyOWQiLCJpc3MiOiJodHRwczovL2JyZWFrZG93bi5tZSIsImF1ZCI6IkJyZWFrZG93blVzZXIiLCJleHAiOjE1MjIyMDg0MzYsIm5iZiI6MTUyMjEyMTk3Nn0.RaojUDUcu9BbWi8xQd-YkEQskrjwhHpaLxkR6s1cX34",
    "sourceLanguage": "en-US",
    "language": "en-US",
    "indexingPreset": "Default",
    "linguisticModelId": "00000000-0000-0000-0000-000000000000"
  }],
  "social": {
    "likedByUser": false,
    "likes": 0,
    "views": 0
  }
}';
$json1='
{
"accountId": "a76ef345-7cef-4367-9599-5c0eca019523",
"id": "f5bb31d633",
"partition": null,
"name": "a",
"description": null,
"userName": "muhamed salih",
"createTime": "2018-03-23T15:54:58.7550358+00:00",
"organization": "",
"privacyMode": "Public",
"state": "Processed",
"isOwned": true,
"isEditable": false,
"isBase": true,
"durationInSeconds": 49,
"summarizedInsights": {
"name": "a",
"shortId": "f5bb31d633",
"privacyMode": 2,
"duration": {
"time": "00:00:49",
"seconds": 49.0
},
"thumbnailUrl": "https://www.videoindexer.ai/api/Thumbnail/f5bb31d633/0943db3b-3eb5-4686-91c5-caa6bfa4c85e",
"faces": [{
"id": 2084,
"shortId": "f5bb31d633",
"bingId": null,
"confidence": 0.94533,
"name": "Sundar ",
"description": null,
"title": null,
"thumbnailId": "97204e1a-e26a-45f9-9def-4e57bfd10783",
"thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/f5bb31d633/97204e1a-e26a-45f9-9def-4e57bfd10783",
"appearances": [{
"startTime": "00:00:00.0670000",
"endTime": "00:00:49",
"startSeconds": 0.1,
"endSeconds": 49.0
}],
"seenDuration": 48.9,
"seenDurationRatio": 0.99795918367346936
}, {
"id": 1332,
"shortId": "f5bb31d633",
"bingId": null,
"confidence": 0.0,
"name": "Unknown #2",
"description": null,
"title": null,
"thumbnailId": "7d3a8a97-6c28-4dd5-9bbb-d5e6b7570714",
"thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/f5bb31d633/7d3a8a97-6c28-4dd5-9bbb-d5e6b7570714",
"appearances": [{
"startTime": "00:00:10.8330000",
"endTime": "00:00:24.5660000",
"startSeconds": 10.8,
"endSeconds": 24.6
}, {
"startTime": "00:00:37.1660000",
"endTime": "00:00:44.9660000",
"startSeconds": 37.2,
"endSeconds": 45.0
}],
"seenDuration": 21.599999999999998,
"seenDurationRatio": 0.4408163265306122
}],
"topics": [{
"name": "work",
"appearances": [{
"startTime": "00:00:00",
"endTime": "00:00:09.7500000",
"startSeconds": 0.0,
"endSeconds": 9.8
}, {
"startTime": "00:00:09.7500000",
"endTime": "00:00:14.1000000",
"startSeconds": 9.8,
"endSeconds": 14.1
}],
"isTranscript": true,
"id": 0
}, {
"name": "time",
"appearances": [{
"startTime": "00:00:00",
"endTime": "00:00:09.7500000",
"startSeconds": 0.0,
"endSeconds": 9.8
}, {
"startTime": "00:00:25.6900000",
"endTime": "00:00:29.9300000",
"startSeconds": 25.7,
"endSeconds": 29.9
}],
"isTranscript": true,
"id": 1
}, {
"name": "future",
"appearances": [{
"startTime": "00:00:29.9300000",
"endTime": "00:00:40.0900000",
"startSeconds": 29.9,
"endSeconds": 40.1
}, {
"startTime": "00:00:44.9700000",
"endTime": "00:00:49",
"startSeconds": 45.0,
"endSeconds": 49.0
}],
"isTranscript": true,
"id": 2
}],
"sentiments": [{
"sentimentKey": "Neutral",
"appearances": [{
"startTime": "00:00:00",
"endTime": "00:00:49",
"startSeconds": 0.0,
"endSeconds": 49.0
}],
"seenDurationRatio": 1.0
}],
"audioEffects": [{
"audioEffectKey": "Speech",
"appearances": [{
"startTime": "00:00:00.1700000",
"endTime": "00:00:49",
"startSeconds": 0.2,
"endSeconds": 49.0
}],
"seenDurationRatio": 0.99591836734693873,
"seenDuration": 48.8
}],
"annotations": [{
"id": 1,
"name": "person",
"appearances": [{
"startTime": "00:00:00.0660000",
"endTime": "00:00:49",
"startSeconds": 0.1,
"endSeconds": 49.0
}]
}, {
"id": 4,
"name": "indoor",
"appearances": [{
"startTime": "00:00:00.0660000",
"endTime": "00:00:49",
"startSeconds": 0.1,
"endSeconds": 49.0
}]
}, {
"id": 2,
"name": "man",
"appearances": [{
"startTime": "00:00:00.0660000",
"endTime": "00:00:47",
"startSeconds": 0.1,
"endSeconds": 47.0
}]
}, {
"id": 5,
"name": "suit",
"appearances": [{
"startTime": "00:00:01.1330000",
"endTime": "00:00:08.6000000",
"startSeconds": 1.1,
"endSeconds": 8.6
}, {
"startTime": "00:00:11.7990000",
"endTime": "00:00:24.6000000",
"startSeconds": 11.8,
"endSeconds": 24.6
}, {
"startTime": "00:00:33.1330000",
"endTime": "00:00:45.9330000",
"startSeconds": 33.1,
"endSeconds": 45.9
}]
}, {
"id": 3,
"name": "wall",
"appearances": [{
"startTime": "00:00:00.0660000",
"endTime": "00:00:11.8000000",
"startSeconds": 0.1,
"endSeconds": 11.8
}, {
"startTime": "00:00:24.5990000",
"endTime": "00:00:45.9330000",
"startSeconds": 24.6,
"endSeconds": 45.9
}]
}, {
"id": 7,
"name": "cellphone",
"appearances": [{
"startTime": "00:00:26.7330000",
"endTime": "00:00:27.8000000",
"startSeconds": 26.7,
"endSeconds": 27.8
}]
}, {
"id": 6,
"name": "looking",
"appearances": [{
"startTime": "00:00:01.1330000",
"endTime": "00:00:02.2000000",
"startSeconds": 1.1,
"endSeconds": 2.2
}]
}],
"brands": [],
"statistics": {
"correspondenceCount": 0,
"speakerTalkToListenRatio": {
"1": 1.0
},
"speakerLongestMonolog": {
"1": 49
},
"speakerNumberOfFragments": {
"1": 1
},
"speakerWordCount": {
"1": 143
}
}
},
"breakdowns": [{
"accountId": "a76ef345-7cef-4367-9599-5c0eca019523",
"id": "f5bb31d633",
"state": "Processed",
"processingProgress": "100%",
"failureCode": "General",
"failureMessage": "",
"externalId": null,
"externalUrl": null,
"metadata": null,
"insights": {
"transcriptBlocks": [{
"id": 0,
"lines": [{
"id": 0,
"timeRange": {
"start": "00:00:00",
"end": "00:00:09.7500000"
},
"adjustedTimeRange": {
"start": "00:00:00",
"end": "00:00:09.7500000"
},
"participantId": 1,
"text": "Hey I is probably the most important thing humanity is that has ever worked on and I think of it as something more profound than electricity or fire and anytime you",
"isIncluded": true,
"confidence": 0.90045161290322584
}, {
"id": 1,
"timeRange": {
"start": "00:00:09.7500000",
"end": "00:00:14.1000000"
},
"adjustedTimeRange": {
"start": "00:00:09.7500000",
"end": "00:00:14.1000000"
},
"participantId": 1,
"text": "work with technology you need to learn to harness the benefits.",
"isIncluded": true,
"confidence": 1.0
}, {
"id": 2,
"timeRange": {
"start": "00:00:14.1000000",
"end": "00:00:17.0500000"
},
"adjustedTimeRange": {
"start": "00:00:14.1000000",
"end": "00:00:17.0500000"
},
"participantId": 1,
"text": "And while minimizing the downside.",
"isIncluded": true,
"confidence": 0.73190347999999994
}, {
"id": 3,
"timeRange": {
"start": "00:00:17.0500000",
"end": "00:00:25.6900000"
},
"adjustedTimeRange": {
"start": "00:00:17.0500000",
"end": "00:00:25.6900000"
},
"participantId": 1,
"text": "You know stepping back when you think about you know a lot of problems in the world today its because we typically have a constraint on resources AI for the",
"isIncluded": true,
"confidence": 0.93053333333333332
}, {
"id": 4,
"timeRange": {
"start": "00:00:25.6900000",
"end": "00:00:29.9300000"
},
"adjustedTimeRange": {
"start": "00:00:25.6900000",
"end": "00:00:29.9300000"
},
"participantId": 1,
"text": "first time I think overtime offers a different construct.",
"isIncluded": true,
"confidence": 0.94444444444444442
}, {
"id": 5,
"timeRange": {
"start": "00:00:29.9300000",
"end": "00:00:40.0900000"
},
"adjustedTimeRange": {
"start": "00:00:29.9300000",
"end": "00:00:40.0900000"
},
"participantId": 1,
"text": "Things which are constrained and look like a zero sum game today may not be so in the future take education for example its really difficult to educate people in",
"isIncluded": true,
"confidence": 0.97658650666666669
}, {
"id": 6,
"timeRange": {
"start": "00:00:40.0900000",
"end": "00:00:44.9700000"
},
"adjustedTimeRange": {
"start": "00:00:40.0900000",
"end": "00:00:44.9700000"
},
"participantId": 1,
"text": "a cost effective way of AI mean fundamentally changed that equation.",
"isIncluded": true,
"confidence": 0.86706746363636356
}, {
"id": 7,
"timeRange": {
"start": "00:00:44.9700000",
"end": "00:00:49"
},
"adjustedTimeRange": {
"start": "00:00:44.9700000",
"end": "00:00:49"
},
"participantId": 1,
"text": "It may make it possible for us to have clean cheap renewable energy for the future.",
"isIncluded": true,
"confidence": -1.0
}],
"sentimentIds": [],
"thumbnailsIds": [],
"sentiment": 0.845546246,
"faces": [{
"id": 2084,
"thumbnailId": "d822530d-2c69-486b-9f34-8bdc5da6c5c3",
"ranges": [{
"timeRange": {
"start": "00:00:00.0670000",
"end": "00:00:37.1660000"
},
"adjustedTimeRange": {
"start": "00:00:00.0670000",
"end": "00:00:37.1660000"
}
}, {
"timeRange": {
"start": "00:00:44.9660000",
"end": "00:00:49"
},
"adjustedTimeRange": {
"start": "00:00:44.9660000",
"end": "00:00:49"
}
}]
}, {
"id": 1332,
"thumbnailId": "fcb3d1ed-111d-4135-a334-71f8370b9f57",
"ranges": [{
"timeRange": {
"start": "00:00:10.8330000",
"end": "00:00:24.5660000"
},
"adjustedTimeRange": {
"start": "00:00:10.8330000",
"end": "00:00:24.5660000"
}
}, {
"timeRange": {
"start": "00:00:37.1660000",
"end": "00:00:44.9660000"
},
"adjustedTimeRange": {
"start": "00:00:37.1660000",
"end": "00:00:44.9660000"
}
}]
}],
"ocrs": [],
"audioEffectInstances": [{
"type": 4,
"ranges": [{
"type": 4,
"timeRange": {
"start": "00:00:00.1700000",
"end": "00:00:49"
}
}]
}],
"scenes": [{
"id": 0,
"timeRange": {
"start": "00:00:00",
"end": "00:00:24.5660000"
},
"keyFrame": "00:00:10.8000000",
"keyFrameThumbnailId": "dc4a369d-9d7d-4c35-8079-72863042091f",
"shots": [{
"id": 0,
"timeRange": {
"start": "00:00:00",
"end": "00:00:10.8330000"
},
"keyFrame": "00:00:10",
"keyFrameThumbnailId": "87981095-ebec-48a6-8d6e-70f38c4997cb"
}, {
"id": 1,
"timeRange": {
"start": "00:00:10.8330000",
"end": "00:00:24.5660000"
},
"keyFrame": "00:00:10.8000000",
"keyFrameThumbnailId": "2ea77611-1ea0-44d1-8284-d91b06cdf4b0"
}]
}, {
"id": 1,
"timeRange": {
"start": "00:00:24.5660000",
"end": "00:00:37.1660000"
},
"keyFrame": "00:00:24.5330000",
"keyFrameThumbnailId": "636c82d1-7ba4-4b9b-9344-ee259fc4c089",
"shots": [{
"id": 2,
"timeRange": {
"start": "00:00:24.5660000",
"end": "00:00:37.1660000"
},
"keyFrame": "00:00:24.5330000",
"keyFrameThumbnailId": "47ec297f-27f7-48ea-827c-aebfbdcd1887"
}]
}, {
"id": 2,
"timeRange": {
"start": "00:00:37.1660000",
"end": "00:00:44.9660000"
},
"keyFrame": "00:00:37.3330000",
"keyFrameThumbnailId": "8fbecce9-05d8-4f84-8ec7-58568aa0ac4d",
"shots": [{
"id": 3,
"timeRange": {
"start": "00:00:37.1660000",
"end": "00:00:44.9660000"
},
"keyFrame": "00:00:37.3330000",
"keyFrameThumbnailId": "4034da68-57ef-4d7f-81c8-8a9a0d4fc66e"
}]
}, {
"id": 3,
"timeRange": {
"start": "00:00:44.9660000",
"end": "00:00:49"
},
"keyFrame": "00:00:44.9330000",
"keyFrameThumbnailId": "17be459a-d24f-4d2e-b6be-b6082ad80971",
"shots": [{
"id": 4,
"timeRange": {
"start": "00:00:44.9660000",
"end": "00:00:49"
},
"keyFrame": "00:00:44.9330000",
"keyFrameThumbnailId": "76194489-ca80-4709-9020-78b437b5ab70"
}]
}],
"annotations": [{
"id": 1,
"name": "person",
"timeRanges": [{
"start": "00:00:00.0660000",
"end": "00:00:49"
}],
"adjustedTimeRanges": [{
"start": "00:00:00.0660000",
"end": "00:00:49"
}]
}, {
"id": 2,
"name": "man",
"timeRanges": [{
"start": "00:00:00.0660000",
"end": "00:00:11.8000000"
}, {
"start": "00:00:12.8660000",
"end": "00:00:23.5330000"
}, {
"start": "00:00:24.5990000",
"end": "00:00:47"
}],
"adjustedTimeRanges": [{
"start": "00:00:00.0660000",
"end": "00:00:11.8000000"
}, {
"start": "00:00:12.8660000",
"end": "00:00:23.5330000"
}, {
"start": "00:00:24.5990000",
"end": "00:00:47"
}]
}, {
"id": 3,
"name": "wall",
"timeRanges": [{
"start": "00:00:00.0660000",
"end": "00:00:01.1330000"
}, {
"start": "00:00:02.1990000",
"end": "00:00:09.6660000"
}, {
"start": "00:00:10.7330000",
"end": "00:00:11.8000000"
}, {
"start": "00:00:24.5990000",
"end": "00:00:26.7330000"
}, {
"start": "00:00:28.8660000",
"end": "00:00:29.9330000"
}, {
"start": "00:00:30.9990000",
"end": "00:00:45.9330000"
}],
"adjustedTimeRanges": [{
"start": "00:00:00.0660000",
"end": "00:00:01.1330000"
}, {
"start": "00:00:02.1990000",
"end": "00:00:09.6660000"
}, {
"start": "00:00:10.7330000",
"end": "00:00:11.8000000"
}, {
"start": "00:00:24.5990000",
"end": "00:00:26.7330000"
}, {
"start": "00:00:28.8660000",
"end": "00:00:29.9330000"
}, {
"start": "00:00:30.9990000",
"end": "00:00:45.9330000"
}]
}, {
"id": 4,
"name": "indoor",
"timeRanges": [{
"start": "00:00:00.0660000",
"end": "00:00:26.7330000"
}, {
"start": "00:00:28.8660000",
"end": "00:00:36.3330000"
}, {
"start": "00:00:37.3990000",
"end": "00:00:49"
}],
"adjustedTimeRanges": [{
"start": "00:00:00.0660000",
"end": "00:00:26.7330000"
}, {
"start": "00:00:28.8660000",
"end": "00:00:36.3330000"
}, {
"start": "00:00:37.3990000",
"end": "00:00:49"
}]
}, {
"id": 5,
"name": "suit",
"timeRanges": [{
"start": "00:00:01.1330000",
"end": "00:00:04.3330000"
}, {
"start": "00:00:05.3990000",
"end": "00:00:08.6000000"
}, {
"start": "00:00:11.7990000",
"end": "00:00:21.4000000"
}, {
"start": "00:00:23.5330000",
"end": "00:00:24.6000000"
}, {
"start": "00:00:33.1330000",
"end": "00:00:35.2660000"
}, {
"start": "00:00:36.3330000",
"end": "00:00:45.9330000"
}],
"adjustedTimeRanges": [{
"start": "00:00:01.1330000",
"end": "00:00:04.3330000"
}, {
"start": "00:00:05.3990000",
"end": "00:00:08.6000000"
}, {
"start": "00:00:11.7990000",
"end": "00:00:21.4000000"
}, {
"start": "00:00:23.5330000",
"end": "00:00:24.6000000"
}, {
"start": "00:00:33.1330000",
"end": "00:00:35.2660000"
}, {
"start": "00:00:36.3330000",
"end": "00:00:45.9330000"
}]
}, {
"id": 6,
"name": "looking",
"timeRanges": [{
"start": "00:00:01.1330000",
"end": "00:00:02.2000000"
}],
"adjustedTimeRanges": [{
"start": "00:00:01.1330000",
"end": "00:00:02.2000000"
}]
}, {
"id": 7,
"name": "cellphone",
"timeRanges": [{
"start": "00:00:26.7330000",
"end": "00:00:27.8000000"
}],
"adjustedTimeRanges": [{
"start": "00:00:26.7330000",
"end": "00:00:27.8000000"
}]
}]
}],
"topics": [{
"id": 0,
"name": "work",
"stem": "work",
"words": ["work"],
"rank": 1.0
}, {
"id": 1,
"name": "time",
"stem": "time",
"words": ["time"],
"rank": 1.0
}, {
"id": 2,
"name": "future",
"stem": "future",
"words": ["future"],
"rank": 1.0
}],
"brands": [],
"faces": [{
"id": 2084,
"bingId": null,
"name": "Sundar ",
"thumbnailId": "97204e1a-e26a-45f9-9def-4e57bfd10783",
"description": null,
"title": null,
"imageUrl": null,
"confidence": 0.94533,
"knownPersonId": "abe43f3f-998e-41c2-af37-757102610c2f"
}, {
"id": 1332,
"bingId": null,
"name": "Unknown #2",
"thumbnailId": "7d3a8a97-6c28-4dd5-9bbb-d5e6b7570714",
"description": null,
"title": null,
"imageUrl": null,
"confidence": 0.0,
"knownPersonId": "00000000-0000-0000-0000-000000000000"
}],
"participants": [{
"id": 1,
"name": "Speaker #1"
}],
"contentModeration": {
"adultClassifierValue": 1E-05,
"racyClassifierValue": 0.21071,
"bannedWordsCount": 0,
"bannedWordsRatio": 0.0,
"reviewRecommended": false,
"isAdult": false
},
"audioEffectsCategories": [{
"type": 4,
"key": "Speech"
}],
"framePatterns": []
},
"thumbnailUrl": "https://www.videoindexer.ai/api/Thumbnail/f5bb31d633/0943db3b-3eb5-4686-91c5-caa6bfa4c85e",
"publishedUrl": "https://rodmandev.streaming.mediaservices.windows.net:443/3d78e706-0f72-4cc5-99e7-064bb1eb0d79/a.ism/manifest",
"publishedProxyUrl": null,
"viewToken": "Bearer=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1cm46bWljcm9zb2Z0OmF6dXJlOm1lZGlhc2VydmljZXM6Y29udGVudGtleWlkZW50aWZpZXIiOiI1OTgxNGMxYi02NWExLTQ5YmUtYmMxOC0xMTlkZmM1NTJkOGMiLCJpc3MiOiJodHRwczovL2JyZWFrZG93bi5tZSIsImF1ZCI6IkJyZWFrZG93blVzZXIiLCJleHAiOjE1MjIyMDgzNjEsIm5iZiI6MTUyMjEyMTkwMX0.r6s8QWegdKZQvefiu6ZPCL1l52LKFL4Dkt8Qxt3Oi3c",
"sourceLanguage": "en-US",
"language": "en-US",
"indexingPreset": "Default",
"linguisticModelId": "00000000-0000-0000-0000-000000000000"
}],
"social": {
"likedByUser": false,
"likes": 0,
"views": 0
}
}';
     function categorize_percent($json, $file_name) {
        $data=json_decode($json,true);
        
        $percent=array();

        $search_array=array();
        $topics=topic_getter($json);
        foreach($topics as $key=>$value) 
            $search_array[]=$key;
        $annotations=annotation_getter($json);
        foreach($annotations as $key=>$value)
            $search_array[]=$key;
        

        $title=array();
    
        $faces=$data["summarizedInsights"]["faces"];
        foreach($faces as $current) {
            if($current["title"]!=null)
                $title[]=$current["title"];
        }
        $search_array=array_merge($search_array,$title);
        $search_array=array_unique($search_array);
        
        
        $lines=json_decode(trans($file_name));
        
		foreach($lines as $line) {
		    
			$cur_line=explode(" ", trim($line[2]));
			foreach($cur_line as $val)
			    $search_array[]=$val;
		}
		
        
        
        $categories=array("entertainment"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/entertainment.txt","business and finance"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/business.txt","election"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/politics.txt","science and technology"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/sci_and_tec.txt","weather"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/weather.txt","sports"=>"/home/trendsep/public_html/sih2018/algorithms/datasets/sports.txt");
        $max_category="general";
        $max=0.1;
        foreach($categories as $category=>$file_name) {
            $cur_count=0;
            
            $tot_words=array();
            $file_handle = fopen($file_name, "r");
            
            while (!feof($file_handle)) {
                 $tot_words[] = trim(strtolower(fgets($file_handle)));
            }
            fclose($file_handle);
            
            foreach($search_array as $cur_word) {
                if($cur_word!=NULL and in_array(strtolower($cur_word),$tot_words)) {
                
                    $cur_count+=1;
                    
                }
            }
            $percent[$category]=$cur_count/count($tot_words)*100;
            if ($max<$cur_count/count($tot_words)*100) {
                $max=$cur_count/count($tot_words)*100;
                $max_category=$category;
                
            }
            
        }
        $sub=array("gst","demonetisation","politics","banking","scheme","technology");
        
        foreach($sub as $val)
            if(in_array($val,$search_array))
                $max_category=$max_category.", ".$val;

        return $percent;
    }
    
    
    
    
 

 
//print_r(categorize_percent($json,"fm_news.vtt"));