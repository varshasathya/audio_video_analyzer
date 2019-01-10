<?php
require_once "/home/trendsep/public_html/sih2018/algorithms/source_json_seperator.php";
require  "/home/trendsep/public_html/sih2018/config/config.php";
require_once "/home/trendsep/public_html/sih2018/algorithms/trancript.php";
require "/home/trendsep/public_html/sih2018/temp/service.php";
// $json1='
// {
// "accountId": "a76ef345-7cef-4367-9599-5c0eca019523",
// "id": "f5bb31d633",
// "partition": null,
// "name": "a",
// "description": null,
// "userName": "muhamed salih",
// "createTime": "2018-03-23T15:54:58.7550358+00:00",
// "organization": "",
// "privacyMode": "Public",
// "state": "Processed",
// "isOwned": true,
// "isEditable": false,
// "isBase": true,
// "durationInSeconds": 49,
// "summarizedInsights": {
// "name": "a",
// "shortId": "f5bb31d633",
// "privacyMode": 2,
// "duration": {
// "time": "00:00:49",
// "seconds": 49.0
// },
// "thumbnailUrl": "https://www.videoindexer.ai/api/Thumbnail/f5bb31d633/0943db3b-3eb5-4686-91c5-caa6bfa4c85e",
// "faces": [{
// "id": 2084,
// "shortId": "f5bb31d633",
// "bingId": null,
// "confidence": 0.94533,
// "name": "Sundar ",
// "description": null,
// "title": null,
// "thumbnailId": "97204e1a-e26a-45f9-9def-4e57bfd10783",
// "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/f5bb31d633/97204e1a-e26a-45f9-9def-4e57bfd10783",
// "appearances": [{
// "startTime": "00:00:00.0670000",
// "endTime": "00:00:49",
// "startSeconds": 0.1,
// "endSeconds": 49.0
// }],
// "seenDuration": 48.9,
// "seenDurationRatio": 0.99795918367346936
// }, {
// "id": 1332,
// "shortId": "f5bb31d633",
// "bingId": null,
// "confidence": 0.0,
// "name": "Unknown #2",
// "description": null,
// "title": null,
// "thumbnailId": "7d3a8a97-6c28-4dd5-9bbb-d5e6b7570714",
// "thumbnailFullUrl": "https://www.videoindexer.ai/api/Thumbnail/f5bb31d633/7d3a8a97-6c28-4dd5-9bbb-d5e6b7570714",
// "appearances": [{
// "startTime": "00:00:10.8330000",
// "endTime": "00:00:24.5660000",
// "startSeconds": 10.8,
// "endSeconds": 24.6
// }, {
// "startTime": "00:00:37.1660000",
// "endTime": "00:00:44.9660000",
// "startSeconds": 37.2,
// "endSeconds": 45.0
// }],
// "seenDuration": 21.599999999999998,
// "seenDurationRatio": 0.4408163265306122
// }],
// "topics": [{
// "name": "work",
// "appearances": [{
// "startTime": "00:00:00",
// "endTime": "00:00:09.7500000",
// "startSeconds": 0.0,
// "endSeconds": 9.8
// }, {
// "startTime": "00:00:09.7500000",
// "endTime": "00:00:14.1000000",
// "startSeconds": 9.8,
// "endSeconds": 14.1
// }],
// "isTranscript": true,
// "id": 0
// }, {
// "name": "time",
// "appearances": [{
// "startTime": "00:00:00",
// "endTime": "00:00:09.7500000",
// "startSeconds": 0.0,
// "endSeconds": 9.8
// }, {
// "startTime": "00:00:25.6900000",
// "endTime": "00:00:29.9300000",
// "startSeconds": 25.7,
// "endSeconds": 29.9
// }],
// "isTranscript": true,
// "id": 1
// }, {
// "name": "future",
// "appearances": [{
// "startTime": "00:00:29.9300000",
// "endTime": "00:00:40.0900000",
// "startSeconds": 29.9,
// "endSeconds": 40.1
// }, {
// "startTime": "00:00:44.9700000",
// "endTime": "00:00:49",
// "startSeconds": 45.0,
// "endSeconds": 49.0
// }],
// "isTranscript": true,
// "id": 2
// }],
// "sentiments": [{
// "sentimentKey": "Neutral",
// "appearances": [{
// "startTime": "00:00:00",
// "endTime": "00:00:49",
// "startSeconds": 0.0,
// "endSeconds": 49.0
// }],
// "seenDurationRatio": 1.0
// }],
// "audioEffects": [{
// "audioEffectKey": "Speech",
// "appearances": [{
// "startTime": "00:00:00.1700000",
// "endTime": "00:00:49",
// "startSeconds": 0.2,
// "endSeconds": 49.0
// }],
// "seenDurationRatio": 0.99591836734693873,
// "seenDuration": 48.8
// }],
// "annotations": [{
// "id": 1,
// "name": "person",
// "appearances": [{
// "startTime": "00:00:00.0660000",
// "endTime": "00:00:49",
// "startSeconds": 0.1,
// "endSeconds": 49.0
// }]
// }, {
// "id": 4,
// "name": "indoor",
// "appearances": [{
// "startTime": "00:00:00.0660000",
// "endTime": "00:00:49",
// "startSeconds": 0.1,
// "endSeconds": 49.0
// }]
// }, {
// "id": 2,
// "name": "man",
// "appearances": [{
// "startTime": "00:00:00.0660000",
// "endTime": "00:00:47",
// "startSeconds": 0.1,
// "endSeconds": 47.0
// }]
// }, {
// "id": 5,
// "name": "suit",
// "appearances": [{
// "startTime": "00:00:01.1330000",
// "endTime": "00:00:08.6000000",
// "startSeconds": 1.1,
// "endSeconds": 8.6
// }, {
// "startTime": "00:00:11.7990000",
// "endTime": "00:00:24.6000000",
// "startSeconds": 11.8,
// "endSeconds": 24.6
// }, {
// "startTime": "00:00:33.1330000",
// "endTime": "00:00:45.9330000",
// "startSeconds": 33.1,
// "endSeconds": 45.9
// }]
// }, {
// "id": 3,
// "name": "wall",
// "appearances": [{
// "startTime": "00:00:00.0660000",
// "endTime": "00:00:11.8000000",
// "startSeconds": 0.1,
// "endSeconds": 11.8
// }, {
// "startTime": "00:00:24.5990000",
// "endTime": "00:00:45.9330000",
// "startSeconds": 24.6,
// "endSeconds": 45.9
// }]
// }, {
// "id": 7,
// "name": "cellphone",
// "appearances": [{
// "startTime": "00:00:26.7330000",
// "endTime": "00:00:27.8000000",
// "startSeconds": 26.7,
// "endSeconds": 27.8
// }]
// }, {
// "id": 6,
// "name": "looking",
// "appearances": [{
// "startTime": "00:00:01.1330000",
// "endTime": "00:00:02.2000000",
// "startSeconds": 1.1,
// "endSeconds": 2.2
// }]
// }],
// "brands": [],
// "statistics": {
// "correspondenceCount": 0,
// "speakerTalkToListenRatio": {
// "1": 1.0
// },
// "speakerLongestMonolog": {
// "1": 49
// },
// "speakerNumberOfFragments": {
// "1": 1
// },
// "speakerWordCount": {
// "1": 143
// }
// }
// },
// "breakdowns": [{
// "accountId": "a76ef345-7cef-4367-9599-5c0eca019523",
// "id": "f5bb31d633",
// "state": "Processed",
// "processingProgress": "100%",
// "failureCode": "General",
// "failureMessage": "",
// "externalId": null,
// "externalUrl": null,
// "metadata": null,
// "insights": {
// "transcriptBlocks": [{
// "id": 0,
// "lines": [{
// "id": 0,
// "timeRange": {
// "start": "00:00:00",
// "end": "00:00:09.7500000"
// },
// "adjustedTimeRange": {
// "start": "00:00:00",
// "end": "00:00:09.7500000"
// },
// "participantId": 1,
// "text": "Hey I is probably the most important thing humanity is that has ever worked on and I think of it as something more profound than electricity or fire and anytime you",
// "isIncluded": true,
// "confidence": 0.90045161290322584
// }, {
// "id": 1,
// "timeRange": {
// "start": "00:00:09.7500000",
// "end": "00:00:14.1000000"
// },
// "adjustedTimeRange": {
// "start": "00:00:09.7500000",
// "end": "00:00:14.1000000"
// },
// "participantId": 1,
// "text": "work with technology you need to learn to harness the benefits.",
// "isIncluded": true,
// "confidence": 1.0
// }, {
// "id": 2,
// "timeRange": {
// "start": "00:00:14.1000000",
// "end": "00:00:17.0500000"
// },
// "adjustedTimeRange": {
// "start": "00:00:14.1000000",
// "end": "00:00:17.0500000"
// },
// "participantId": 1,
// "text": "And while minimizing the downside.",
// "isIncluded": true,
// "confidence": 0.73190347999999994
// }, {
// "id": 3,
// "timeRange": {
// "start": "00:00:17.0500000",
// "end": "00:00:25.6900000"
// },
// "adjustedTimeRange": {
// "start": "00:00:17.0500000",
// "end": "00:00:25.6900000"
// },
// "participantId": 1,
// "text": "You know stepping back when you think about you know a lot of problems in the world today its because we typically have a constraint on resources AI for the",
// "isIncluded": true,
// "confidence": 0.93053333333333332
// }, {
// "id": 4,
// "timeRange": {
// "start": "00:00:25.6900000",
// "end": "00:00:29.9300000"
// },
// "adjustedTimeRange": {
// "start": "00:00:25.6900000",
// "end": "00:00:29.9300000"
// },
// "participantId": 1,
// "text": "first time I think overtime offers a different construct.",
// "isIncluded": true,
// "confidence": 0.94444444444444442
// }, {
// "id": 5,
// "timeRange": {
// "start": "00:00:29.9300000",
// "end": "00:00:40.0900000"
// },
// "adjustedTimeRange": {
// "start": "00:00:29.9300000",
// "end": "00:00:40.0900000"
// },
// "participantId": 1,
// "text": "Things which are constrained and look like a zero sum game today may not be so in the future take education for example its really difficult to educate people in",
// "isIncluded": true,
// "confidence": 0.97658650666666669
// }, {
// "id": 6,
// "timeRange": {
// "start": "00:00:40.0900000",
// "end": "00:00:44.9700000"
// },
// "adjustedTimeRange": {
// "start": "00:00:40.0900000",
// "end": "00:00:44.9700000"
// },
// "participantId": 1,
// "text": "a cost effective way of AI mean fundamentally changed that equation.",
// "isIncluded": true,
// "confidence": 0.86706746363636356
// }, {
// "id": 7,
// "timeRange": {
// "start": "00:00:44.9700000",
// "end": "00:00:49"
// },
// "adjustedTimeRange": {
// "start": "00:00:44.9700000",
// "end": "00:00:49"
// },
// "participantId": 1,
// "text": "It may make it possible for us to have clean cheap renewable energy for the future.",
// "isIncluded": true,
// "confidence": -1.0
// }],
// "sentimentIds": [],
// "thumbnailsIds": [],
// "sentiment": 0.845546246,
// "faces": [{
// "id": 2084,
// "thumbnailId": "d822530d-2c69-486b-9f34-8bdc5da6c5c3",
// "ranges": [{
// "timeRange": {
// "start": "00:00:00.0670000",
// "end": "00:00:37.1660000"
// },
// "adjustedTimeRange": {
// "start": "00:00:00.0670000",
// "end": "00:00:37.1660000"
// }
// }, {
// "timeRange": {
// "start": "00:00:44.9660000",
// "end": "00:00:49"
// },
// "adjustedTimeRange": {
// "start": "00:00:44.9660000",
// "end": "00:00:49"
// }
// }]
// }, {
// "id": 1332,
// "thumbnailId": "fcb3d1ed-111d-4135-a334-71f8370b9f57",
// "ranges": [{
// "timeRange": {
// "start": "00:00:10.8330000",
// "end": "00:00:24.5660000"
// },
// "adjustedTimeRange": {
// "start": "00:00:10.8330000",
// "end": "00:00:24.5660000"
// }
// }, {
// "timeRange": {
// "start": "00:00:37.1660000",
// "end": "00:00:44.9660000"
// },
// "adjustedTimeRange": {
// "start": "00:00:37.1660000",
// "end": "00:00:44.9660000"
// }
// }]
// }],
// "ocrs": [],
// "audioEffectInstances": [{
// "type": 4,
// "ranges": [{
// "type": 4,
// "timeRange": {
// "start": "00:00:00.1700000",
// "end": "00:00:49"
// }
// }]
// }],
// "scenes": [{
// "id": 0,
// "timeRange": {
// "start": "00:00:00",
// "end": "00:00:24.5660000"
// },
// "keyFrame": "00:00:10.8000000",
// "keyFrameThumbnailId": "dc4a369d-9d7d-4c35-8079-72863042091f",
// "shots": [{
// "id": 0,
// "timeRange": {
// "start": "00:00:00",
// "end": "00:00:10.8330000"
// },
// "keyFrame": "00:00:10",
// "keyFrameThumbnailId": "87981095-ebec-48a6-8d6e-70f38c4997cb"
// }, {
// "id": 1,
// "timeRange": {
// "start": "00:00:10.8330000",
// "end": "00:00:24.5660000"
// },
// "keyFrame": "00:00:10.8000000",
// "keyFrameThumbnailId": "2ea77611-1ea0-44d1-8284-d91b06cdf4b0"
// }]
// }, {
// "id": 1,
// "timeRange": {
// "start": "00:00:24.5660000",
// "end": "00:00:37.1660000"
// },
// "keyFrame": "00:00:24.5330000",
// "keyFrameThumbnailId": "636c82d1-7ba4-4b9b-9344-ee259fc4c089",
// "shots": [{
// "id": 2,
// "timeRange": {
// "start": "00:00:24.5660000",
// "end": "00:00:37.1660000"
// },
// "keyFrame": "00:00:24.5330000",
// "keyFrameThumbnailId": "47ec297f-27f7-48ea-827c-aebfbdcd1887"
// }]
// }, {
// "id": 2,
// "timeRange": {
// "start": "00:00:37.1660000",
// "end": "00:00:44.9660000"
// },
// "keyFrame": "00:00:37.3330000",
// "keyFrameThumbnailId": "8fbecce9-05d8-4f84-8ec7-58568aa0ac4d",
// "shots": [{
// "id": 3,
// "timeRange": {
// "start": "00:00:37.1660000",
// "end": "00:00:44.9660000"
// },
// "keyFrame": "00:00:37.3330000",
// "keyFrameThumbnailId": "4034da68-57ef-4d7f-81c8-8a9a0d4fc66e"
// }]
// }, {
// "id": 3,
// "timeRange": {
// "start": "00:00:44.9660000",
// "end": "00:00:49"
// },
// "keyFrame": "00:00:44.9330000",
// "keyFrameThumbnailId": "17be459a-d24f-4d2e-b6be-b6082ad80971",
// "shots": [{
// "id": 4,
// "timeRange": {
// "start": "00:00:44.9660000",
// "end": "00:00:49"
// },
// "keyFrame": "00:00:44.9330000",
// "keyFrameThumbnailId": "76194489-ca80-4709-9020-78b437b5ab70"
// }]
// }],
// "annotations": [{
// "id": 1,
// "name": "person",
// "timeRanges": [{
// "start": "00:00:00.0660000",
// "end": "00:00:49"
// }],
// "adjustedTimeRanges": [{
// "start": "00:00:00.0660000",
// "end": "00:00:49"
// }]
// }, {
// "id": 2,
// "name": "man",
// "timeRanges": [{
// "start": "00:00:00.0660000",
// "end": "00:00:11.8000000"
// }, {
// "start": "00:00:12.8660000",
// "end": "00:00:23.5330000"
// }, {
// "start": "00:00:24.5990000",
// "end": "00:00:47"
// }],
// "adjustedTimeRanges": [{
// "start": "00:00:00.0660000",
// "end": "00:00:11.8000000"
// }, {
// "start": "00:00:12.8660000",
// "end": "00:00:23.5330000"
// }, {
// "start": "00:00:24.5990000",
// "end": "00:00:47"
// }]
// }, {
// "id": 3,
// "name": "wall",
// "timeRanges": [{
// "start": "00:00:00.0660000",
// "end": "00:00:01.1330000"
// }, {
// "start": "00:00:02.1990000",
// "end": "00:00:09.6660000"
// }, {
// "start": "00:00:10.7330000",
// "end": "00:00:11.8000000"
// }, {
// "start": "00:00:24.5990000",
// "end": "00:00:26.7330000"
// }, {
// "start": "00:00:28.8660000",
// "end": "00:00:29.9330000"
// }, {
// "start": "00:00:30.9990000",
// "end": "00:00:45.9330000"
// }],
// "adjustedTimeRanges": [{
// "start": "00:00:00.0660000",
// "end": "00:00:01.1330000"
// }, {
// "start": "00:00:02.1990000",
// "end": "00:00:09.6660000"
// }, {
// "start": "00:00:10.7330000",
// "end": "00:00:11.8000000"
// }, {
// "start": "00:00:24.5990000",
// "end": "00:00:26.7330000"
// }, {
// "start": "00:00:28.8660000",
// "end": "00:00:29.9330000"
// }, {
// "start": "00:00:30.9990000",
// "end": "00:00:45.9330000"
// }]
// }, {
// "id": 4,
// "name": "indoor",
// "timeRanges": [{
// "start": "00:00:00.0660000",
// "end": "00:00:26.7330000"
// }, {
// "start": "00:00:28.8660000",
// "end": "00:00:36.3330000"
// }, {
// "start": "00:00:37.3990000",
// "end": "00:00:49"
// }],
// "adjustedTimeRanges": [{
// "start": "00:00:00.0660000",
// "end": "00:00:26.7330000"
// }, {
// "start": "00:00:28.8660000",
// "end": "00:00:36.3330000"
// }, {
// "start": "00:00:37.3990000",
// "end": "00:00:49"
// }]
// }, {
// "id": 5,
// "name": "suit",
// "timeRanges": [{
// "start": "00:00:01.1330000",
// "end": "00:00:04.3330000"
// }, {
// "start": "00:00:05.3990000",
// "end": "00:00:08.6000000"
// }, {
// "start": "00:00:11.7990000",
// "end": "00:00:21.4000000"
// }, {
// "start": "00:00:23.5330000",
// "end": "00:00:24.6000000"
// }, {
// "start": "00:00:33.1330000",
// "end": "00:00:35.2660000"
// }, {
// "start": "00:00:36.3330000",
// "end": "00:00:45.9330000"
// }],
// "adjustedTimeRanges": [{
// "start": "00:00:01.1330000",
// "end": "00:00:04.3330000"
// }, {
// "start": "00:00:05.3990000",
// "end": "00:00:08.6000000"
// }, {
// "start": "00:00:11.7990000",
// "end": "00:00:21.4000000"
// }, {
// "start": "00:00:23.5330000",
// "end": "00:00:24.6000000"
// }, {
// "start": "00:00:33.1330000",
// "end": "00:00:35.2660000"
// }, {
// "start": "00:00:36.3330000",
// "end": "00:00:45.9330000"
// }]
// }, {
// "id": 6,
// "name": "looking",
// "timeRanges": [{
// "start": "00:00:01.1330000",
// "end": "00:00:02.2000000"
// }],
// "adjustedTimeRanges": [{
// "start": "00:00:01.1330000",
// "end": "00:00:02.2000000"
// }]
// }, {
// "id": 7,
// "name": "cellphone",
// "timeRanges": [{
// "start": "00:00:26.7330000",
// "end": "00:00:27.8000000"
// }],
// "adjustedTimeRanges": [{
// "start": "00:00:26.7330000",
// "end": "00:00:27.8000000"
// }]
// }]
// }],
// "topics": [{
// "id": 0,
// "name": "work",
// "stem": "work",
// "words": ["work"],
// "rank": 1.0
// }, {
// "id": 1,
// "name": "time",
// "stem": "time",
// "words": ["time"],
// "rank": 1.0
// }, {
// "id": 2,
// "name": "future",
// "stem": "future",
// "words": ["future"],
// "rank": 1.0
// }],
// "brands": [],
// "faces": [{
// "id": 2084,
// "bingId": null,
// "name": "Sundar ",
// "thumbnailId": "97204e1a-e26a-45f9-9def-4e57bfd10783",
// "description": null,
// "title": null,
// "imageUrl": null,
// "confidence": 0.94533,
// "knownPersonId": "abe43f3f-998e-41c2-af37-757102610c2f"
// }, {
// "id": 1332,
// "bingId": null,
// "name": "Unknown #2",
// "thumbnailId": "7d3a8a97-6c28-4dd5-9bbb-d5e6b7570714",
// "description": null,
// "title": null,
// "imageUrl": null,
// "confidence": 0.0,
// "knownPersonId": "00000000-0000-0000-0000-000000000000"
// }],
// "participants": [{
// "id": 1,
// "name": "Speaker #1"
// }],
// "contentModeration": {
// "adultClassifierValue": 1E-05,
// "racyClassifierValue": 0.21071,
// "bannedWordsCount": 0,
// "bannedWordsRatio": 0.0,
// "reviewRecommended": false,
// "isAdult": false
// },
// "audioEffectsCategories": [{
// "type": 4,
// "key": "Speech"
// }],
// "framePatterns": []
// },
// "thumbnailUrl": "https://www.videoindexer.ai/api/Thumbnail/f5bb31d633/0943db3b-3eb5-4686-91c5-caa6bfa4c85e",
// "publishedUrl": "https://rodmandev.streaming.mediaservices.windows.net:443/3d78e706-0f72-4cc5-99e7-064bb1eb0d79/a.ism/manifest",
// "publishedProxyUrl": null,
// "viewToken": "Bearer=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1cm46bWljcm9zb2Z0OmF6dXJlOm1lZGlhc2VydmljZXM6Y29udGVudGtleWlkZW50aWZpZXIiOiI1OTgxNGMxYi02NWExLTQ5YmUtYmMxOC0xMTlkZmM1NTJkOGMiLCJpc3MiOiJodHRwczovL2JyZWFrZG93bi5tZSIsImF1ZCI6IkJyZWFrZG93blVzZXIiLCJleHAiOjE1MjIyMDgzNjEsIm5iZiI6MTUyMjEyMTkwMX0.r6s8QWegdKZQvefiu6ZPCL1l52LKFL4Dkt8Qxt3Oi3c",
// "sourceLanguage": "en-US",
// "language": "en-US",
// "indexingPreset": "Default",
// "linguisticModelId": "00000000-0000-0000-0000-000000000000"
// }],
// "social": {
// "likedByUser": false,
// "likes": 0,
// "views": 0
// }
// }';



function search_match($file_name,$search_data,$break_id) {
    $json=breakdown_id_to_json($break_id);
	
	$res=array();
    $topic=topic_getter($json);
    //var_dump($topic);
    
    $brand=array();
    $data=json_decode($json,true);
    $brands=$data["summarizedInsights"]["brands"];
    foreach((array)$brands as $current) {
        $brand[$current["name"]]=$current["appearances"];
    }
    
    
	$json=$data;
	$json=$json["summarizedInsights"];
	foreach($search_data as $cur_word) {
	    $cur_word=strtolower($cur_word);
		$res[$cur_word]=array();
		foreach($json["faces"] as $face) {
			if(strtolower($cur_word)==$face["title"]) {
				foreach($face["appearances"] as $cur) {
					$res[$cur_word][]=array($cur["startTime"],$cur["endTime"]);
				}
				break;
			}
		}
    foreach($topic as $cur_top=>$waste) {
      if(strtolower($cur_top)==$cur_word)
        $res[$cur_word][]=$waste;
    }
    
    foreach($brand as $cur_top=>$waste) {
      if(strtolower($cur_top)==$cur_word)
        $res[$cur_word][]=$waste;
    }
    
		foreach($json["annotations"] as $objects) {
			if(strtolower($objects["name"])==$cur_word) {
				foreach($objects["appearances"] as $cur) {
					$res[$cur_word][]=array($cur["startTime"],$cur["endTime"]);
				}
				break;
			}
		}
		
        
		$lines=trans($file_name);
		foreach(json_decode($lines) as $line) {
		    
			if(in_array($cur_word,explode(" ", trim($line[2])))) {
				$res[$cur_word][]=array($line[0],$line[1]);

			}
		
		}
		


	}

	return $res;

}
$word=array("Google");
print_r(search_match("pichai_new.vtt",$word,"4e1c219c20"));

//$words=array("ti","time");
//print_r(search_match("google_ceo_abt_ai.vtt",$words,"f5bb31d633"));
// session_start();
// $jsonData = json_decode(file_get_contents('php://input'), true);
// $search_data_prev =$jsonData["searchkey"];

// $search_data = split (" ", $search_data_prev);
// $returnarray = array();
// $i=0;

//                           $conn=connection();
//                             //$userid=$_SESSION["userid"];
//                             $userid=8;
//                             $sql="SELECT * FROM data inner join data_details on data.dataid = data_details.dataid and userid={$userid} and data_details.processed_state = 1";
//                             // echo $sql;
//                             $result=query_dml($conn,$sql);
//                             $c = 0;
//                           //print_r($result);
//                             while($row = mysqli_fetch_assoc($result)) {
//                                 $filename=$row["name"];
//                                 $breakdownid = $row["breakdown_id"];
//                                 $splitter = split ("\.", $filename);
//                                  $vttname=$splitter[0];
//                                  $vttname = $vttname.".vtt";
//                                  $json = search_match($vttname,$search_data,$breakdownid);
//                                   $json=json_encode($json);
//                                   $returnarray[$filename]=$json;
//                                 //  $json = json_decode($json);
                                
//                                 // if(count((array)$json)==0){
//                                 //     $returnarray[$i]=$filename;
//                                 //     $i++;
//                                 // }
//                                 //  print_r($json);
//                                 //  echo "\n\n";
//                             }
//                         print_r(json_encode($returnarray));
?>